window.cookieconsent.initialise({
	"palette": {
		"popup": {
			"background": "#000"
		},
		"button": {
			"background": "#f1d600"
		}
	},
	"theme": "edgeless",
	"type": "opt-in",
	"content": {
		"message": "Deze website maakt gebruik van cookies om u de best mogelijke gebruikerservaring te bieden",
		"allow": "Accepteren",
		"deny": "Weigeren",
		"link": "Meer informatie"
	},
	onInitialise: function (status) {
		var type = this.options.type;
		var didConsent = this.hasConsented();
		// var googleAnalytics = (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-63228437-17', 'auto');ga('set', 'anonymizeIp', true);ga('send', 'pageview');
		if (type == 'opt-in' && didConsent) {
			// googleAnalytics;
		}
		if (type == 'opt-out' && !didConsent) {
			// googleAnalytics;
		}
	},
	onStatusChange: function(status, chosenBefore) {
		var type = this.options.type;
		var didConsent = this.hasConsented();
		// var googleAnalytics = (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-63228437-17', 'auto');ga('set', 'anonymizeIp', true);ga('send', 'pageview');
		if (type == 'opt-in' && didConsent) {
			// googleAnalytics;
		}
		if (type == 'opt-out' && !didConsent) {
			// googleAnalytics;
		}
	},
	onRevokeChoice: function() {
		var type = this.options.type;
		// var googleAnalytics = (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-63228437-17', 'auto');ga('set', 'anonymizeIp', true);ga('send', 'pageview');
		if (type == 'opt-in') {
		    // googleAnalytics;
		}
		if (type == 'opt-out') {
		    // googleAnalytics;
		}
	}
});