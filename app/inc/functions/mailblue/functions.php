<?php
/**
 * create a new contact
 *
 * @param string $email
 * @param string $firstname
 * @param string $lastname
 * @return object|string
 */
function createNewContact($email, $firstname, $lastname) {
    $curl = curl_init();
    
    curl_setopt_array($curl, [
      CURLOPT_URL => "https://mooiecht.api-us1.com/api/3/contacts",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode([
        'contact' => [
            'email' => $email,
            'firstName' => $firstname,
            'lastName' => $lastname
        ]
      ]),
      CURLOPT_HTTPHEADER => [
        "Api-Token: c41ce56f8df24883ee9ab1418c0e36e94888bf4d0d608dfe66e8f56a6d2f56b990224606",
        "accept: application/json",
        "content-type: application/json"
      ],
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      return false;
    } else {
        $response = json_decode($response);

        if(!property_exists($response, 'contact')) return false;
        return $response->contact;
    }
}





/**
 * Subscribe or unsubscribe a contact from a list.
 *
 * @param integer $contactID
 * @param boolean $subscribe
 * @param string $list
 * @return object
 */
function updateContactList($contactID, $subscribe = true, $list = "nieuwsbrief") {
    if ($subscribe) $subscribe = 1;
    else $subscribe = 2;

    if ($list == "nieuwsbrief") $list = 4;


    $curl = curl_init();
    
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://mooiecht.api-us1.com/api/3/contactLists",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
        'contactList' => [
            'list' => $list,
            'contact' => $contactID,
            'status' => $subscribe
        ]
        ]),
        CURLOPT_HTTPHEADER => [
        "Api-Token: c41ce56f8df24883ee9ab1418c0e36e94888bf4d0d608dfe66e8f56a6d2f56b990224606",
        "accept: application/json",
        "content-type: application/json"
        ],
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        return json_decode('{error:"'.$err.'"}');
    } else {
        $response = json_decode($response);
        if(!property_exists($response, 'contacts')) return false;
        return $response->contacts[0];
    }
}





/**
 * Search a contact based on email
 *
 * @param string $email
 * @return object | false
 */
function searchContact($email) {
    $curl = curl_init();
    
    curl_setopt_array($curl, [
      CURLOPT_URL => "https://mooiecht.api-us1.com/api/3/contacts?email=".$email,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => [
        "Api-Token: c41ce56f8df24883ee9ab1418c0e36e94888bf4d0d608dfe66e8f56a6d2f56b990224606",
        "accept: application/json"
      ],
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        return false;
    } else {
        $contact = json_decode($response)->contacts;
        if(empty($contact)) return false;
        return $contact[0];
    }
}









/**
 * Delete a contact from MailBlue
 *
 * @param [type] $email
 * @return boolean
 */
function DELETECONTACT($email) {
    $contact = searchContact($email);
    if(!$contact) return false;

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://mooiecht.api-us1.com/api/3/contacts/".$contact->id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_HTTPHEADER => [
            "Api-Token: c41ce56f8df24883ee9ab1418c0e36e94888bf4d0d608dfe66e8f56a6d2f56b990224606",
            "accept: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return false;
    } else {
        $response = json_decode($response);
        
        if(!property_exists($response, "message")) return true;
        return false;
    }
}

/**
 * Subscribe a user to a mailing list
 *
 * @param string $email
 * @param string $firstname
 * @param string $lastname
 * @param string $list
 * @return boolean
 */
function SUBSCRIBE($email, $firstname, $lastname, $list = "Nieuwsbrief") {
    $contact = searchContact($email);
    if(!$contact) $contact = createNewContact($email, $firstname, $lastname);
    
    $isUpdated = updateContactList($contact->id, true);
    if(!$isUpdated) return false;
    return true;
}

/**
 * Unsubscribe a user from a list
 *
 * @param string $email
 * @param string $list
 * @return object
 */
function UNSUBSCRIBE($email, $list) {
    $contact = searchContact($email);
    if(!$contact) return false;
    
    $isUpdated = updateContactList($contact->id, false); 
    return $isUpdated;
}



// Test functies:
// print_r(json_encode(SUBSCRIBE("vincent.gerla@surlinio.com", "Vincent", "Gerla", "Nieuwsbrief")));
// print_r(json_encode(UNSUBSCRIBE("vincent.gerla@surlinio.com", "Nieuwsbrief")));
// print_r(json_encode(DELETECONTACT("vincent.gerla@surlinio.com")));
