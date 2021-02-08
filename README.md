### Description
A very simple useless and databaseless Blogging platform built with Pure PHP, Phraser and JSON.
# HZBLOG

### [Features]:
- Create Posts
- Read Posts (using Markdown)
- List Posts (From JSON, can be host localy or remotely)
- Thumbnails (From JSON, can be host localy or remotely)
- Category (From JSON)
- Tag (Just create under post, listing is not currently supported)
- Social Media Links (From JSON)
- API
### [Features] (Upcomming):
- Tags?
- Edit Post
- Delete Post (Have to change entire post grabing method)
- Markdowns editor included


### Core:
- Pure PHP files (Tested on 7.3)
- HTML + JS + CSS for frontend rendering (responsive for Mobile and Desktop)
- JSON file handling
- Admin panel with CRUD (Currently just Read and Create :p)

### Screenshot:
[![HomePage](https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nr2nmluemaj0/b/Bucket/o/screenshots%2Fscreencapture-sampleblog-2021-02-08-10_17_04.png "HomePage")](http://https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nr2nmluemaj0/b/Bucket/o/screenshots%2Fscreencapture-sampleblog-2021-02-08-10_17_04.png "HomePage")
> *Homepage*

[![Category listing](https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nr2nmluemaj0/b/Bucket/o/screenshots%2Fscreencapture-sampleblog-category-php-2021-02-08-10_18_31.png "Category listing")](http://https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nr2nmluemaj0/b/Bucket/o/screenshots%2Fscreencapture-sampleblog-category-php-2021-02-08-10_18_31.png "Category listing")
> *Category listing*

[![Post](https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nr2nmluemaj0/b/Bucket/o/screenshots%2Fscreencapture-sampleblog-post-php-2021-02-08-10_18_08.png "Post")](http://https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nr2nmluemaj0/b/Bucket/o/screenshots%2Fscreencapture-sampleblog-post-php-2021-02-08-10_18_08.png "Post")
> *Post display*

### Installation:
1. Clone this repo
2. Edit data.json and upload it to your host. Now you are good to go

### Usage:
1. Upload markdown (.md) file to `/post/`
2. To add post, go to `/admin/new` (Have to add password in future), and enter information
3. Done!

### Demo:
[https://blog.hzv.io](https://blog.hzv.io "https://blog.hzv.io")
