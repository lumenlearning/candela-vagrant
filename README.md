## Pre-requisites
1. Latest version of virtualbox (4.3.10+), latest version of vagrant (1.5.2)
  Ubuntu's apt is too out of date. Please use the latest versions from Oracle and Vagrant;
    * https://www.virtualbox.org/wiki/Linux_Downloads
    * http://www.vagrantup.com/downloads.html
1. vagrant-vbguest plugin `vagrant plugin install vagrant-vbguest`
1. Working NFS server
    `apt-get install nfs-kernel-server`

See also See also https://github.com/FunnyMonkey/fm-vagrant/blob/streamline/README.md
if you run into any issues with `vagrant up` or setting up virtualbox or vagrant.

## Setup
1. Checkout repository

    `git clone https://github.com/lumenlearning/candela-vagrant.git`
1. `cd candela`
1. Checkout the candela codebase

    `git clone https://github.com/lumenlearning/candela.git www/192.168.33.10`
1. `vagrant up`
1. Navigate to http://192.168.33.10
1. Follow instructions from candela repo's README.md (this is the repo checked out above and will be found at `www/192.168.33.10/README.md`)
  1. Note that the database name, username, and password are all `wordpress`
  1. Configuration files will be found in `www/192.168.33.10`
