# Manage Livestream
Simple website for managing a livestream's IP.

## Background
[OBS (Open Broadcaster Software)](https://obsproject.com/) is free and open source software for video recording and live streaming.<br><br>

The purpose of the website is to keep track of the host's IP address.<br>
E.g `rtmp://192.168.0.1/live/test` 

## Usage
The website shows the host's IP address.<br>
A user can visit the website and copy the IP into a video player (e.g. VLC).

## Why have this tool?
My team and I do not want to send IPs via Facebook messenger or any similiar application.<br>
That's why we built this. Also, it's easier to redirect people to a website than to a link. Especially when the IP can change multiple times during setup.

## DEMO
[https://github.andrewisen.se/manage-livestream/](https://github.andrewisen.se/manage-livestream/)

## Local Development
You can setup a simple PHP server for local development, e.g.<br>
`php -S localhost:9000`

## Security Note
It's not recommended to publicly display your host's IP.
So, make sure you "hide" the site if you're consider using this.<br><br>

## Contribution
Pull requests are welcome.<br>
The code isn't very pretty at the moment.<br>
I intend to update at a future date :)
