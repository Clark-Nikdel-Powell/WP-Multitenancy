# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  vagrant_dir = File.dirname(__FILE__)

  config.vm.box = "cnp/flask"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.hostname = "cnpflask"
  config.vm.synced_folder ".", "/var/www", :owner => "www-data", :mount_options => ["dmode=777", "fmode=666"]

  # Recursively fetch the paths to all flask-hosts files under the www/ directory.
  paths = Dir[File.join(vagrant_dir, 'public', 'sites', '**', 'flask-hosts')]
  # Parse the found flask-hosts files for host names.
  hosts = paths.map do |path|
    # Read line from file and remove line breaks
    lines = File.readlines(path).map(&:chomp)
    # Filter out comments starting with "#"
    lines.grep(/\A[^#]/)
  end.flatten.uniq # Remove duplicate entries

  if defined?(VagrantPlugins::HostsUpdater)
      # Pass the found host names to the hostsupdater plugin so it can perform magic.
      config.hostsupdater.aliases = hosts
      config.hostsupdater.remove_on_suspend = true
    end

    # Customfile
    if File.exists?(File.join(vagrant_dir,'Customfile')) then
      eval(IO.read(File.join(vagrant_dir,'Customfile')), binding)
    end

    config.trigger.after [:up, :reload] do
      hosts.each do |host|
        run_remote "mysql --user=root --password=root -e 'CREATE DATABASE IF NOT EXISTS `#{host}`;'"
      end
    end

end
