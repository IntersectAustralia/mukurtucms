# User manual: [Ngan'gi Language Preservation](https://ngangi.net)
## EOPAS Administrators

Content:
* [Adding an EOPAS video](#adding-eopas-video-with-elan-transcript)
* [Linking EOPAS video to Murkutu](#linking-eopas-video-to-murkutu)

## Adding EOPAS video with ELAN transcript
**Precondition 1:** The following is assuming the files being uploaded have been processed by ELAN software - See https://tla.mpi.nl/tools/tla-tools/elan/ for ELAN download and User guides for ELAN)

**Precondition 2:** Video & Audio files able to be uploaded  to EOPAS:  wav, mp3, mov, mp4 (these will be transcoded to the (ogg) streaming format - future plans include transcoding to WebM and MP4, but these are not available in the current version of EOPAS). Please be patient as it can take a few minutes to complete the uploading and transcoding process.

As a user with permission to upload to EOPAS, go to [EOPAS.ngangi](https://eopas.ngangi.net/login). (User may have to register and you’ll receive an email which will give them access to the site)

Once logged into the EOPAS server:
1. Click on “Upload media” (on the top bar)
2. Fill in the basic metadata fields and upload the video file (.wav or .mp4).
3. Save this video record. This may take a few minutes to upload so be patient. Don’t leave this upload page until “100% complete” shows in the left footer. Video/Audio must have transcoding completed before the next steps are relevant.
4. Back on the homepage, click on `Upload Transcripts` (on the top bar)
5. Go through the same process as with the video. Fill in metadata and upload `.eaf` file. (.eaf file is the ELAN export, which EOPAS accepts along with some other xml formats)
6. Save this transcript record.
7. Go to `Browse Transcripts` and click on the record you added.
8. In the top-left corner, click on `link to video record` (NEED TO CHECK THIS) and find the relevant video/audio and select the `Attach` link
9. Go to “Browse Media” &  select the (now transcript-linked) Video/Audio record and copy the URL.
 Embed the video in Murkutu

## Linking EOPAS video to Murkutu
Sign in as admin to Murkutu/Ngangi site:
1. click on `+ Digital Heritage` (on the Murkutu menu options)
2. Create asset then: add Atom Item by clicking on the `Create a new eopas atom` gold symbol in the SCALD sidebar
3. Enter/paste EOPAS URL and fill in basic metadata.
4. Then from the scald sidebar, you can drag and drop the eopas item into the relevant field in the asset
5. Fill in the metadata. You may also want to consider filling in Additional Metadata (including location). If so, click on Additional Metadata and fill in details.
6. Click `Save`
