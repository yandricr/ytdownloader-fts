
# Youtube Downloader and Get Data

Convert youtube links to download formats and get video data


## Installation

Recommended way of installing this is via [Composer](https://getcomposer.org/):

```bash
  composer require yandricr/ytdownloader-fts
```

## Usage/Examples

```php
include "./vendor/autoload.php";

$youtube = new \Ytfts\Downloader\downloader();

$inf = $youtube->getInf("https://www.youtube.com/watch?v=UFzpAh-x_IY&ab_channel=Discoverychannel");
print($inf);
```

JSON

```json
{
    "title": "Where did we come from? - Science Documentary with Neil DeGrasse Tyson",
    "description": "Where did we come from? - Science Documentary 2016 with Neil DeGrasse Tyson\nDid the entire human race originate in Africa? Are people from different parts of the world related to each other? How similar are humans to chimpanzees? Gene experts look into all these questions by studying DNA.",
    "gender": "People & Blogs",
    "vid": {
        "id": "UFzpAh-x_IY",
        "ul": "https://www.youtube.com/watch?v=UFzpAh-x_IY",
        "duration": "0:53:23",
        "published": "2015-07-17",
        "views": "1,979,155",
        "thumbnail": "https://i.ytimg.com/vi/UFzpAh-x_IY/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLBrOEbeFxTnDqqCMt5RfAdi1pHeCA",
        "author": {
            "name": "Discovery channel",
            "id": "UC_OVsoKcD3jxHgxjQirLq-A",
            "ul": "https://www.youtube.com/channel/UC_OVsoKcD3jxHgxjQirLq-A",
            "thumbnail": "https://yt3.ggpht.com/ytc/AMLnZu9shdxOF60Y5M7Pj-av8U-Oz_COvPOwzGB8FPaB=s176-c-k-c0x00ffffff-no-rj"
        }
    },
    "download": [
        {
            "type": "audio/mp3",
            "quality": "320kbps",
            "size": "122.18 MB",
            "ul": "https://ve46.aadika.xyz/download/UFzpAh-x_IY/mp3/320/1672197393/0ad645296b172c57ad9a7eee51e448daa1c91a29756cddd7f53218d7b1dd5643/1?f=yt1s.io",
            "status": "success"
        },
        {
            "type": "video/mp4",
            "quality": "720p",
            "size": "429.81 MB",
            "ul": "https://redirector.googlevideo.com/videoplayback?expire=1672215392&ei=AKerY4HnEtCJ8gOhkqvQDw&ip=139.59.128.21&id=o-AMfqRq_wbR2G_EnmhZrTkgWDsRCndCNjUlRmP73ru7vZ&itag=22&source=youtube&requiressl=yes&mh=CQ&mm=31%2C26&mn=sn-4g5ednsl%2Csn-5hne6nsr&ms=au%2Conr&mv=m&mvi=5&pl=19&initcwndbps=345000&spc=zIddbD4AQYebnWgFbe465puIH_vZDgk&vprv=1&svpuc=1&mime=video%2Fmp4&cnr=14&ratebypass=yes&dur=3203.053&lmt=1651456999441372&mt=1672193360&fvip=2&fexp=24001373%2C24007246&c=ANDROID&txp=4432432&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Ccnr%2Cratebypass%2Cdur%2Clmt&sig=AOq0QJ8wRAIgNFCPrDKhFb7dgJL-Nr2X5tzwI3CxBUwiI5uEz5ZPknUCIDmFgTlmu80VpG6tP_C10LfiVKlsN12i3I7RT46i1KQ4&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRAIgVYlCcaPTQun7VHk4oFIvC9MVuAqIjRX9tq9p0Tc7fdoCIGQIzayAH3p-3HngBLnxE0tEZl7V6zE6rHdp0cah7ps4&host=rr5---sn-4g5ednsl.googlevideo.com&title=Where%20did%20we%20come%20from?%20-%20Science%20Documentary%20with%20Neil%20DeGrasse%20Tyson",
            "status": "success"
        }
    ]
}
```

## API
Use the ytdownloader api by [clicking here](https://ytdownloader.projectsrpp.repl.co/)

Developed by yandricr
