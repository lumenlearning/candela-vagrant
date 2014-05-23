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
    git clone https://github.com/lumenlearning/candela.git
1. `cd candela`
1. `vagrant up`
1. Navigate to http://192.168.33.10
1. Click "Create a Configuration File"
1. Click "Let's go!"
1. DB Connection details;
  * Database Name: `wordpress`
  * User Name: `wordpress`
  * Password: `wordpress`
  * Database Host: `localhost`
  * Table Prefix: `wp_`
1. Click "Run the install"
1. Welcome
  * Site Title: `Candela`
  * Username: `******`
  * Password: `******`
  * Email: `******`
1. Click "Log in"
1. Login with details just created.
1. Tools -> Network Setup
1. Choose 'sub-directories'
1. Click "Install"
1. Follow on screen instructions making appropriate edits to `www/192.168.33.10/wp-config.php` and `www/192.168.33.10/.htaccess`

##Enable and Configure Pressbooks and Pressbooks Textbooks

1. Once above edits are made relogin: http://192.168.33.10/wp-login.php
1. Navigate to "My Sites" -> "Network Admin" -> "Plugins"
1. "Network Activate" Pressbooks
1. "Network Activate" PressBooks Textbook
1. Navigate to "My Catalog" -> "Network Admin" -> "Themes"
1. Select "Installed Themes"
1. "Network Enable" the "Open Textbooks" theme - NOTE - this theme has all the PBTB functionality. The other PB specific themes will also work, but will not deliver the PBTB featureset
1. Navigate to "My Catalog" -> "Network Admin" -> "Dashboard"
1. Select "Settings" -> "Network Settings"
1. In the "Allow new registrations" section, select: "Logged in users may register new sites." This allows members with adequate privileges to create their own books
  * the other options on this page should be set/adjusted to suit administrative needs/preference
1. Navigate to "My Catalog" -> "Add a New Book"
1. Get writing!

## Hypothes.is

The hypothes.is functionality is included as part of Pressbooks Textbooks and needs to be enabled on a book by book basis. To enable annotation in your books:

1. Navigate to "PB Textbook" admin section in the book where you want to enable Hypothes.is;
1. Click the "Other" tab;
1. Select "Yes. I would like to add annotation functionality to my book pages."
1. Click the "Save Changes" button.


##Enable and configure LTI and candela LTI

1. Navigate to "My Sites" -> "Network Admin" -> "Plugins"
1. "Network Activate" LTI
1. "Network Activate" Candela LTI
1. Navigate to the textbook you wish to setup for LTI-based access.
1. In the left admin menu, navigate to "LTI Consumers" -> "Add New."

