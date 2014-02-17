quickhost
=========

Quickhost is a small tool we built for easy setup of apache virtualhosts.

A note on Apache setup: we assume, and sincerely hope, you've setup Apache with a sites-available folder which contains your *.conf files, and a sites-enabled containing symlinks to those .conf files.

To install Quickhost, run the following command:


sudo cd /usr/local/bin && sudo git clone git://github.com/digitales/quickhost.git quickhost_files && sudo mv quickhost_files/* . && sudo rm -Rf quickhost_files
