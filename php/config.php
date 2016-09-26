<?php

$CONFIG = array(
    'title' => "unwiredcouch dashboards",
    'navitems' => [
        'Hosts' => '/hosts.php',
        'Graphite' => '/graphite.php',
        'Twitter' => '/tweets.php'
    ],
    'graphite' => [
        'host' => "https://graphite.unwiredcouch.com",
        'hidelegend' => false,
    ],
    'hosts' => array(
       "hermes.unwiredcouch.com" => array(
         "cpus" => 0,
         "apache" => false,
         "interfaces" => ["re0"],
         "filesystems" => ["root"],
         "additional_metrics" => [
           "mailstats" => [
               "messages received" => "collectd.hermes_unwiredcouch_com.mailstats-*.messages.rx",
               "messages sent" => "collectd.hermes_unwiredcouch_com.mailstats-*.messages.tx",
               "bytes received" => "collectd.hermes_unwiredcouch_com.mailstats-*.bytes.rx",
               "bytes sent" => "collectd.hermes_unwiredcouch_com.mailstats-*.bytes.tx",
               "messages rejected" => "collectd.hermes_unwiredcouch_com.mailstats-*.messages_rejected",
               "messages discarded" => "collectd.hermes_unwiredcouch_com.mailstats-*.messages_discarded",
               "messages quarantined" => "collectd.hermes_unwiredcouch_com.mailstats-*.messages_quarantined",
           ],
         ]
       ),
       "syn.nyc.unwiredcouch.com" => array(
         "cpus" => 2,
         "apache" => true,
         "interfaces" => ["re0","re1","re2"],
         "filesystems" => ["root","dev","tmp","usr-home","usr-ports","usr-src","var-crash","var-log","var-mail","var-tmp"],
         "additional_metrics" => [
           "disk_temperature" => [
               "Disk Temperature" => "collectd.syn_nyc_unwiredcouch_com.disktemp-ada*.celsius_current",
           ],
           "mailstats" => [
               "messages received" => "collectd.syn_nyc_unwiredcouch_com.mailstats-*.messages.rx",
               "messages sent" => "collectd.syn_nyc_unwiredcouch_com.mailstats-*.messages.tx",
               "bytes received" => "collectd.syn_nyc_unwiredcouch_com.mailstats-*.bytes.rx",
               "bytes sent" => "collectd.syn_nyc_unwiredcouch_com.mailstats-*.bytes.tx",
               "messages rejected" => "collectd.syn_nyc_unwiredcouch_com.mailstats-*.messages_rejected",
               "messages discarded" => "collectd.syn_nyc_unwiredcouch_com.mailstats-*.messages_discarded",
               "messages quarantined" => "collectd.syn_nyc_unwiredcouch_com.mailstats-*.messages_quarantined",
           ],
           "cpu_temp" => [
               "CPU temperature (celsius)" => "collectd.syn_nyc_unwiredcouch_com.cputemp-*.celsius_current",
           ],
           "bind" => [
               "_default cache rr sets" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-_default-cache_rr_sets.*,'.*dns_qtype_cached-','')",
               "_default query types" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-_default-qtypes.*,'.*dns_qtype-','')",
               "_default resolver stats (query)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-_default-resolver_stats.dns_query*,'.*dns_query-','')",
               "_default resolver stats (rcode)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-_default-resolver_stats.dns_rcode*,'.*dns_rcode-','')",
               "_default resolver stats (resolver)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-_default-resolver_stats.dns_resolver*,'.*dns_resolver-','')",
               "_default resolver stats (response)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-_default-resolver_stats.dns_response*,'.*dns_response-','')",
               "memory" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-global-memory_stats.*,'.*memory-','')",
               "opcodes" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-global-opcodes.*,'.*dns_opcode-','')",
               "global query types" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-global-qtypes.*,'.*dns_qtype-','')",
               "global server stats (query)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-global-server_stats.dns_query*,'.*dns_query-','')",
               "global server stats (rcode)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-global-server_stats.dns_rcode*,'.*dns_rcode-','')",
               "global server stats (request)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-global-server_stats.dns_request*,'.*dns_request-','')",
               "global server stats (response)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-global-server_stats.dns_response*,'.*dns_response-','')",
               "global server stats (reject)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-global-server_stats.dns_reject*,'.*dns_reject-','')",
               "global zone maint stats (notify)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-global-zone_maint_stats.dns_notify*,'.*dns_notify-','')",
               "global zone maint stats (opcode)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-global-zone_maint_stats.dns_opcode*,'.*dns_opcode-','')",
               "global zone maint stats (transfer)" => "aliasSub(collectd.syn_nyc_unwiredcouch_com.bind-global-zone_maint_stats.dns_transfer*,'.*dns_transfer-','')",
           ],
         ]
       ),
       "juno.nyc.unwiredcouch.com" => array(
         "cpus" => 2,
         "apache" => false,
         "interfaces" => ["bge0"],
         "filesystems" => ["root","dev","tmp","usr-home","usr-ports","usr-src","var-crash","var-log","var-mail","var-tmp","backup","backup-Archive-batou_unwiredcouch_com","backup-Archive-esperanza_rebooten_de","backup-Archive-imap_rebooten_de","backup-Archive-samhain_unwiredcouch_com","backup-Archive-vlad_unwiredcouch_com","backup-cassie_local","backup-githubmirror","backup-hanna","backup-juno_nyc_unwiredcouch_com","backup-leviathan_unwiredcouch_com","usr-home-mrtazz-repos"],
         "additional_metrics" => [
           "disk_temperature" => [
               "Disk Temperature" => "collectd.juno_nyc_unwiredcouch_com.disktemp-ada*.celsius_current",
           ],
           "mailstats" => [
               "messages received" => "collectd.juno_nyc_unwiredcouch_com.mailstats-*.messages.rx",
               "messages sent" => "collectd.juno_nyc_unwiredcouch_com.mailstats-*.messages.tx",
               "bytes received" => "collectd.juno_nyc_unwiredcouch_com.mailstats-*.bytes.rx",
               "bytes sent" => "collectd.juno_nyc_unwiredcouch_com.mailstats-*.bytes.tx",
               "messages rejected" => "collectd.juno_nyc_unwiredcouch_com.mailstats-*.messages_rejected",
               "messages discarded" => "collectd.juno_nyc_unwiredcouch_com.mailstats-*.messages_discarded",
               "messages quarantined" => "collectd.juno_nyc_unwiredcouch_com.mailstats-*.messages_quarantined",
           ],
           "cpu_temp" => [
               "CPU temperature (celsius)" => "collectd.juno_nyc_unwiredcouch_com.cputemp-*.celsius_current",
           ],
         ]
       ),
       "psylocke.unwiredcouch.com" => array(
         "cpus" => 1,
         "apache" => false,
         "interfaces" => ["vtnet0"],
         "filesystems" => ["root","dev"],
         "additional_metrics" => [
           "mailstats" => [
               "messages received" => "collectd.psylocke_unwiredcouch_com.mailstats-*.messages.rx",
               "messages sent" => "collectd.psylocke_unwiredcouch_com.mailstats-*.messages.tx",
               "bytes received" => "collectd.psylocke_unwiredcouch_com.mailstats-*.bytes.rx",
               "bytes sent" => "collectd.psylocke_unwiredcouch_com.mailstats-*.bytes.tx",
               "messages rejected" => "collectd.psylocke_unwiredcouch_com.mailstats-*.messages_rejected",
               "messages discarded" => "collectd.psylocke_unwiredcouch_com.mailstats-*.messages_discarded",
               "messages quarantined" => "collectd.psylocke_unwiredcouch_com.mailstats-*.messages_quarantined",
           ],
         ]
       ),
       "leviathan.unwiredcouch.com" => array(
         "cpus" => 8,
         "apache" => true,
         "interfaces" => ["re0"],
         "filesystems" => ["root","storage-jails-carpenter_unwiredcouch_com-dev","tmp","var","storage","storage-backup","storage-graphite","storage-jails","storage-jails-basejail","storage-jails-carpenter_unwiredcouch_com","storage-jails-hermes_unwiredcouch_com","usr-home-mrtazz","storage-jails-carpenter_unwiredcouch_com-proc","storage-jails-carpenter_unwiredcouch_com-basejail","storage-jails-carpenter_unwiredcouch_com-dev-fd","storage-jails-newjail"],
         "additional_metrics" => [
           "disk_temperature" => [
               "Disk Temperature" => "collectd.leviathan_unwiredcouch_com.disktemp-ada*.celsius_current",
           ],
           "mailstats" => [
               "messages received" => "collectd.leviathan_unwiredcouch_com.mailstats-*.messages.rx",
               "messages sent" => "collectd.leviathan_unwiredcouch_com.mailstats-*.messages.tx",
               "bytes received" => "collectd.leviathan_unwiredcouch_com.mailstats-*.bytes.rx",
               "bytes sent" => "collectd.leviathan_unwiredcouch_com.mailstats-*.bytes.tx",
               "messages rejected" => "collectd.leviathan_unwiredcouch_com.mailstats-*.messages_rejected",
               "messages discarded" => "collectd.leviathan_unwiredcouch_com.mailstats-*.messages_discarded",
               "messages quarantined" => "collectd.leviathan_unwiredcouch_com.mailstats-*.messages_quarantined",
           ],
           "cpu_temp" => [
               "CPU temperature (celsius)" => "collectd.leviathan_unwiredcouch_com.cputemp-*.celsius_current",
           ],
         ]
       ),
       "carpenter.unwiredcouch.com" => array(
         "cpus" => 0,
         "apache" => true,
         "interfaces" => ["re0"],
         "filesystems" => ["root"],
         "additional_metrics" => [
           "mailstats" => [
               "messages received" => "collectd.carpenter_unwiredcouch_com.mailstats-*.messages.rx",
               "messages sent" => "collectd.carpenter_unwiredcouch_com.mailstats-*.messages.tx",
               "bytes received" => "collectd.carpenter_unwiredcouch_com.mailstats-*.bytes.rx",
               "bytes sent" => "collectd.carpenter_unwiredcouch_com.mailstats-*.bytes.tx",
               "messages rejected" => "collectd.carpenter_unwiredcouch_com.mailstats-*.messages_rejected",
               "messages discarded" => "collectd.carpenter_unwiredcouch_com.mailstats-*.messages_discarded",
               "messages quarantined" => "collectd.carpenter_unwiredcouch_com.mailstats-*.messages_quarantined",
           ],
         ]
       ),
    )
);
