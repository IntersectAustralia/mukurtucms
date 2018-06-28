# User manual: [Ngan'gi Language Preservation](https://ngangi.net)
## Murkutu Administrators
Murkutu administrators have access to the underlying software powering the Ngan'gi site, which is called Murkutu. Murkutu is built within the website building tool called Drupal, so Murkutu administrators also have access to the Drupal infrastructure. Basically, a Murkutu administrator can do anything in the site - they have full privileges.

Content:
* [Editing website title](#editing-website-title)
* [Add image to slideshow](#add-image-to-slideshow)
* [Delete image from slideshow](#delete-image-from-slideshow)
* [Changing Banner image](#changing-banner-image)
* [Adding a Dictionary word](#adding-a-dictionary-word)
* [Deleting a Dictionary word](#deleting-a-dictionary-word)
* [Bulk importing Dictionary words](#bulk-importing-dictionary-words)
* [Change page layout](#change-page-layout)
* [Activate Comments box](#activate-comments-box)


---
## Editing website title
1. Go to `Dashboard`
2. `Set up site`
3. `Change site name, slogan and email address`

## Add image to slideshow
1. Go to `Content` on Drupal menu (top left)
2. Select `Add content` from dropdown menu
3. Select `Slideshow_image`
4. Enter in details and upload image
5. Then `Save`

## Delete image from slideshow
1. Go to `Content` on Drupal menu (top left)
2. Click on `Atoms`
3. Under `SHOW ONLY ITEMS WHERE`, filter `type` by `Slideshow_image` and click `Filter`
4. Here you can see all of the images in the banner. Delete any by select `delete` in the same line as the image

## Changing Banner image
1. Go to `Dashboard`
2. `Set up Site`
3. `Change site name, slogan and email address`

---
## Edit any text boxes
1. Hover your cursor over the text box. A faint grey icon should appear in the top right corner, looks like a cog.
2. Click on this icon, and then select `Configure block`
3. Then directly edit the text as you wish.
4. Click `Save block`

---
# Dictionary words
## Adding a Dictionary word
[[TO CHECK]]
1. Click on `+ Dictionary word` which appears on any page in the Ngan'gi site once logged in.
2. "Kungumurr Headword" is a mandatory field, and will appear as the "Title" for the word. This field has already been formatted programmatically
3. Add the type of "Word class" e.g. noun or co-verb
The rest of the information relating to the word goes into the "Meaning" field. For this Meaning section to display like other Dictionary words on the site, it requires the user to add the formatting manually when adding the word.
4. To add formatting, select `Switch to plain text editor` from under the `Meaning` field
5. Paste in the version of the word as per the formatting/style below in the sample (Sample/template of how a formatted entry displays in the Dictionary: & HTML sample/template of formatted entry for the Dictionary: from “DIM” to end - (TIP: it’s easiest to go to https://html5-editor.net/ and paste the sample at the end of this guide into the right hand WYSIWYG) and edit/delete to the specific word meanings/usage etc you desire, then copy the right hand html5 version into the “Meaning” field of the “Add word”.
6. Once editing of the meaning in html is complete, change the "Text format" setting to "Full html".
7. Click `Save`

## Deleting a Dictionary word
**Ensure you're logged in**
1. Search the word you want to delete using the search options
2. Click on the word.
3. You'll come to an editing view for this word.
4. Scroll down to the bottom of the editing page and click `Delete`

## Bulk importing Dictionary words
User needs to be able to access https://github.com/IntersectAustralia/ngangi-dictionary-processor
User has a spreadsheet of words they want to add in the format the same as I've found the original file that was used in the Filemaker Pro & will add to this story as an example of the formatting of the original file, and also to provide a sample which I can alter to test with. I'll add this original file to https://drive.google.com/drive/u/0/folders/0BxMqy_hJ_wibTTVCeFhIRFl2YjA as well as to this story. Ill check with Ilya re adding in a copy for the future to https://github.com/IntersectAustralia/ngangi-dictionary-processor.

1. If words in Filemaker Pro, process an Original file to an .xlsx format, (for testing purposes, name this like "ngangi_dictionary2_filemaker_export.xlsx" as the export from the filemaker pro database. Then in Excel, export "ngangi_dictionary2_filemaker_export.xlsx" to a tab separated value (tsv) file.
2. Use the "ngangi_dictionary2_filemaker_export.tsv" file to run https://github.com/IntersectAustralia/ngangi-dictionary-processor to generate the file which is then imported to our Ngan'gi Mukurtu site
3. Clone the latest from https://github.com/IntersectAustralia/ngangi-dictionary-processor to a local folder
4. In a Terminal, navigate to the local folder with the cloned Github ngangi-dictionary-processor project
5. In Terminal `$ ruby process.rb ngangi_dictionary2_filemaker_export.tsv`. This will give you a file output named like "ngangi_dictionary2_filemaker_export_processed.csv". This is the file that needs to be used in the Ngan'gi Mukurtu site Dictionary importer
6. Log in to the Ngan'gi website as user = ngangi (or other user with Drupal privilege)
7. In Drupal Menu go to Structure > Feed Importers
8. At the top of the Feed Importers page (e.g. https://ngangi-staging.intersect.org.au/node/3101/edit#overlay=admin/structure/feeds) there's a blue link "Import" - select this link which will navigate to the Import page e.g. https://ngangi-staging.intersect.org.au/node/3101/edit#overlay=import
9. Select "Ngangi Word Importer" which will navigate to e.g. https://ngangi-staging.intersect.org.au/node/3101/edit#overlay=import/ngangi_word_importer
Upload your processed .csv file (e.g. ngangi_dictionary2_filemaker_export_processed.csv from our example).
Note: https://ngangi-staging.intersect.org.au/node/3101/edit#overlay=import/ngangi_word_importer also shows a link to "Download a template" which downloads a .csv file with the headers required for any Ngangi word csv import).
---
## Change page layout
1. In the top navigation menu (the Drupal menu), select `Content`.
2. Then select the page you want to edit from the content list and select “Edit”.
3. To change the layout of the page, select the “Manage Display” tab (Note: To understand the content block areas, see https://ngangi-staging.intersect.org.au/admin/structure/block/demo/scholarly_lite#overlay-context=)
NOTE: ensure you have a backup before making changes.
---
## Activate Comments box
1. To see the current Permission to make Comments on the site, select `Permissions` in the top navigation menu (top Drupal menu> People -> Permissions).
2. Enter “Comments” in the filter.
3. To change the Comment settings for a particular page/item, go to the top navigation menu (the Drupal menu) & select -> `Content`.
4. Find the Page/Item in the content list and click on it and go to the `Edit` tab.
6. Scroll to the bottom of the page/item until you see “Comment settings” at the bottom of the page. Select “Open” or “Closed”, then and `Save`.
Note: Dictionary page and items can’t be commented because of the way the page is structured.



## FAQs
I added a photograph and it’s not showing on the “Photographs” tab. Answer: The “Photographs” tab content needs page to be edited directly to make photographs display - i.e. As a mukurtu user, go to https://ngangi-staging.intersect.org.au/photographs-menu#overlay-context= and select edit, and images can be added to the page from the scald interface.
