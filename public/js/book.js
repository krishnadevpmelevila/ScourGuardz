/*
	Task4: Create a custom Angular filter to convert number to the relevant number abbreviations
	(ie. 1000 will be 1K, 250000 will be 250K, and million -> “M”, billion -> “B”)
*/
angular.module("app").filter("shortNumberFilter", function() {
    return function(number) {
          if (number === null) return null;
          if (number === 0) return "0";

          var abs = Math.abs(number);
          var isNegative = number < 0;
          var key = "";
          var powers = [
                // billion
                { key: "B", value: Math.pow(10, 9) },
                // million
                { key: "M", value: Math.pow(10, 6) },
                // thousand
                { key: "K", value: 1000 }
          ];

          for (var i = 0; i < powers.length; i++) {
                var reduced = abs / powers[i].value;

                reduced = Math.round(reduced * rounder) / rounder;

                if (reduced >= 1) {
                      abs = reduced;
                      key = powers[i].key;
                      break;
                }
          }

          return (isNegative ? "-" : "") + abs + key;
    };
});
