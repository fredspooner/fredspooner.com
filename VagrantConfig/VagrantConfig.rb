VagrantConfig = {
  box: {
    box_name: "fredspooner.local",
    box_number: 69,
    base_box: "ubuntu/trusty64",
    cpus: 2,
    memory: 1024,
  },
  system: {
    extra_packages: [
      "htop",
      "vim",
      "memcached",
    ],
    timezone: "Europe/London",
  },
  sync: {
    from: ".",
    to: "/var/www/vagrant",
    method: :rsync,
    exclude: [".git"]
  },
  apache: {
    server_name: "fredspooner.local",
    document_root: "/var/www/vagrant",
    modules: [
      "expires",
      "headers",
      "rewrite",
    ],
  },
  mysql: {
    root_password: "root",
    database_name: "fredspooner_com",
  },
  php: {
    extra_packages: [
      "php-gd",
      "php-opcache",
      "php-curl",
      "php-mysql"
    ],
  }
}
