#install keychain
#writen alexsi rebou135as
rpm -i keychain-2.8.0-3.el7.psychotic.noarch.rpm
echo "/usr/bin/keychain $HOME/.ssh/id_rsa" >> ~/.bashrc
echo "source $HOME/.keychain/$HOSTNAME-sh" >> ~/.bashrc
#or
#echo "/usr/bin/keychain $HOME/.ssh/id_rsa;source $HOME/.keychain/$HOSTNAME-sh" >> ~/.bashrc
#

