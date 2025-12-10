# :fish:Sea of Fish:fish:

Container, simple front-end and back-end web development and database management pet project of mine.  This utilizes Podman to pull an Apache and MySQL iimage down and load them with the appropriate files so that a simple website can be utilized that interacts with a database.  The website has a homepage with stats on various types of tinned seafood that have been connsumed.  All data is just from my contributions as I have not made anything public facing.

The project utilizes the LAMP stack.  The focus was to not only get a site up and running that I could play around with, but also get familiarized with working with web front-end and back-end components.

The files in this repo should provide a good base.  A majority of content (images, database entries, etc.) has been reduced to just keep some bare-bones files for a baseline site.

The 'httpd' directory contains the Dockerfile to pull the php:apache image and run the mysqli install command (mysqli is required for interaction between the database and the site).  That directory also contains all of the CSS, PHP, and images used on the site.

There is no Dockerfile for mysql as this is just pulled using the podman-compose.yml file.  There is a dump file of the 'tins' database that is in the 'mysql' directory.  This is used to load up the required database (again, with reduced entries).

SSL has not been implemented yet on this project (will be in the future), so this site will be unsecure.

## Requirements

This project was built on a Fedora 42 VM, so it is based on a Linux OS.  You'll need to have Podman installed on your system.  You could use Docker as well, but I have not played with the configurations to make sure everything transfers over well for Docker setup.

To install Podman, if not already installed:
```
sudo dnf install podman
sudo dnf install podman-compose
```
## Configurations

### Firewall
In order to reach the site, the firewall needs to allow the appropriate port.  The compose file is already set up for mapping port 48123 to 80, which means that port 48123 is the exposed port for HTTP will need to be allowed.  If you decide to change this port mapping, then the appropriate changes will need to be made to your firewall.  Run the following to allow port 48123:
```
sudo firewall-cmd --add-port=48123/tcp --permanent
sudo firewall-cmd --reload
```

### Database
The MySQL database name is ```tins```.  You can make this whatever you want by editing the compose file, but the database dump is looking for the ```tins``` database, so be aware of that.  The MySQL container will fail to start up due to being unable to load the dump file, and the web service is dependent on the database starting up.

## How to Use
Since all basic files are in this repository, just run:
```
podman compose up -d
```

This will start up the Podman containers in the background.  To access the site, you can do one of the following (dependent upon your configuration):
```
http://YOUR_VM_HOST_IP_HERE:48123
```
```
http://YOUR_VM_HOSTNAME:48123
```
To elaborate on this, "YOUR_VM_HOSTNAME" would be whatever the host name of the device is that you are hosting the containers on.  "YOUR_VM_HOST_IP_HERE" would be whatever IP is assigned to the host that is hosting the containers.  Either one should work, but if uncertain, it is probably easier to just use the IP.

At this point, assuming all is well, the site should be visible and this setup can be a little test bed for PHP, HTML, CSS, and/or database manipulation.
