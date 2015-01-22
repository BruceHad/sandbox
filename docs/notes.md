# Log

Branching off the original 'sandbox' to create a new log.

## Google API

https://stackoverflow.com/questions/23641492/google-docs-spreadsheet-to-json

To get a JSON representation of a google spreadsheet.

URL: https://spreadsheets.google.com/feed/key/worksheet/public/values?alt=json-in-script&callback=FUNCTION

* Feed can be one of 'cells' or 'list'
  * cells - separate value for each cell
	* list - separate value for each row
* key - key for the workbook you want to access.
* worksheet - id for the worksheet you want to access (od6 for first sheet).

e.g.

https://spreadsheets.google.com/feeds/list/1iv715qgjkaSCpnJMprnrmxMkwxqioeENloavDN7HWJk/od6/public/values?alt=json-in-script&callback=importGSS

To get a .csv file just need

https://docs.google.com/spreadsheets/d/1iv715qgjkaSCpnJMprnrmxMkwxqioeENloavDN7HWJk/export?gid=0&format=csv

## Converting CSV to Array in PHP

http://www.ravelrumba.com/blog/json-google-spreadsheets/

## Array Output

This produces and array of records like:

	[1] => Array ( 
		[category] => Web App 
		[tags] => js, angular 
		[name] => Do Something - To do list 
		[url] => //sandbox.treerock.me/projects/do-something/app/ 
		[date] => 09/06/2014 
		[description] =>A practice project for learning the AngularJS framework.
		[statusCode] => C 
		[version] => 1 
		[repoURL] => //github.com/treerock/do-something 
		[action] => completed 
		[id] => 0)
		
Want to map this to a log file type thing:

	br>[date] [action] [name & optional link] [hidden description] [optional repo link]
	09/06/2014 completed Do Something - To do list (description) repo

