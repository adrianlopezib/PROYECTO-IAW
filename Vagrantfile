# -*- mode: ruby -*-
# vi: set ft=ruby :


Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/xenial64"

  #Maquina Nginx
  config.vm.define "nginx" do |app|
    app.vm.hostname = "nginx"
    app.vm.network "private_network", ip: "192.168.33.10"
    app.vm.provision "shell", path: "provision/provision-for-nginx.sh"
    app.vm.provision "shell", path: "provision/provision-for-mysql.sh"
  end
 end
