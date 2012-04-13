CREATE TABLE `ezacceleratorqueue` (
  `node_id` int(11) NOT NULL,
  `worker` varchar(255) NOT NULL DEFAULT '',
  `catchtime` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;