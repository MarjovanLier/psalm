<?php // phpcs:ignoreFile

return array (
  'added' => 
  array (
    'bind_textdomain_codeset' => 
    array (
      0 => 'string',
      'domain' => 'string',
      'codeset=' => 'null|string',
    ),
    'bindtextdomain' => 
    array (
      0 => 'string',
      'domain' => 'string',
      'directory=' => 'null|string',
    ),
    'bzclose' => 
    array (
      0 => 'bool',
      'bz' => 'resource',
    ),
    'bzerrno' => 
    array (
      0 => 'int',
      'bz' => 'resource',
    ),
    'bzerror' => 
    array (
      0 => 'array<array-key, mixed>',
      'bz' => 'resource',
    ),
    'bzerrstr' => 
    array (
      0 => 'string',
      'bz' => 'resource',
    ),
    'bzflush' => 
    array (
      0 => 'bool',
      'bz' => 'resource',
    ),
    'bzopen' => 
    array (
      0 => 'false|resource',
      'file' => 'resource|string',
      'mode' => 'string',
    ),
    'bzread' => 
    array (
      0 => 'false|string',
      'bz' => 'resource',
      'length=' => 'int',
    ),
    'bzwrite' => 
    array (
      0 => 'false|int',
      'bz' => 'resource',
      'data' => 'string',
      'length=' => 'int|null',
    ),
    'cal_from_jd' => 
    array (
      0 => 'array{abbrevdayname: string, abbrevmonth: string, date: string, day: int, dayname: string, dow: int, month: int, monthname: string, year: int}',
      'julian_day' => 'int',
      'calendar' => 'int',
    ),
    'dba_fetch' => 
    array (
      0 => 'false|string',
      'key' => 'array<array-key, mixed>|string',
      'dba' => 'resource',
      'skip=' => 'int',
    ),
    'dba_firstkey' => 
    array (
      0 => 'string',
      'dba' => 'Dba\\Connection',
    ),
    'dba_nextkey' => 
    array (
      0 => 'string',
      'dba' => 'Dba\\Connection',
    ),
    'exif_read_data' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'file' => 'resource|string',
      'required_sections=' => 'null|string',
      'as_arrays=' => 'bool',
      'read_thumbnail=' => 'bool',
    ),
    'exif_thumbnail' => 
    array (
      0 => 'false|string',
      'file' => 'string',
      '&w width=' => 'int',
      '&w height=' => 'int',
      '&w image_type=' => 'int',
    ),
    'ldap_exop' => 
    array (
      0 => 'LDAP\\Result|bool',
      'ldap' => 'LDAP\\Connection',
      'request_oid' => 'string',
      'request_data=' => 'null|string',
      'controls=' => 'array<array-key, mixed>|null',
      '&w response_data=' => 'string',
      '&w response_oid=' => 'string',
    ),
    'ldap_exop_passwd' => 
    array (
      0 => 'bool|string',
      'ldap' => 'LDAP\\Connection',
      'user=' => 'string',
      'old_password=' => 'string',
      'new_password=' => 'string',
      '&w controls=' => 'array<array-key, mixed>|null',
    ),
    'ldap_get_option' => 
    array (
      0 => 'bool',
      'ldap' => 'LDAP\\Connection|null',
      'option' => 'int',
      '&w value=' => 'array<array-key, mixed>|int|string',
    ),
    'ldap_list' => 
    array (
      0 => 'LDAP\\Result|array<array-key, LDAP\\Result>|false',
      'ldap' => 'LDAP\\Connection|array<array-key, LDAP\\Connection>',
      'base' => 'array<array-key, mixed>|string',
      'filter' => 'array<array-key, mixed>|string',
      'attributes=' => 'array<array-key, mixed>',
      'attributes_only=' => 'int',
      'sizelimit=' => 'int',
      'timelimit=' => 'int',
      'deref=' => 'int',
      'controls=' => 'array<array-key, mixed>|null',
    ),
    'ldap_parse_exop' => 
    array (
      0 => 'bool',
      'ldap' => 'LDAP\\Connection',
      'result' => 'LDAP\\Result',
      '&w response_data=' => 'string',
      '&w response_oid=' => 'string',
    ),
    'ldap_parse_reference' => 
    array (
      0 => 'bool',
      'ldap' => 'LDAP\\Connection',
      'entry' => 'LDAP\\ResultEntry',
      '&w referrals' => 'array<array-key, mixed>',
    ),
    'ldap_parse_result' => 
    array (
      0 => 'bool',
      'ldap' => 'LDAP\\Connection',
      'result' => 'LDAP\\Result',
      '&w error_code' => 'int',
      '&w matched_dn=' => 'string',
      '&w error_message=' => 'string',
      '&w referrals=' => 'array<array-key, mixed>',
      '&w controls=' => 'array<array-key, mixed>',
    ),
    'ldap_read' => 
    array (
      0 => 'LDAP\\Result|array<array-key, LDAP\\Result>|false',
      'ldap' => 'LDAP\\Connection|array<array-key, LDAP\\Connection>',
      'base' => 'array<array-key, mixed>|string',
      'filter' => 'array<array-key, mixed>|string',
      'attributes=' => 'array<array-key, mixed>',
      'attributes_only=' => 'int',
      'sizelimit=' => 'int',
      'timelimit=' => 'int',
      'deref=' => 'int',
      'controls=' => 'array<array-key, mixed>|null',
    ),
    'ldap_search' => 
    array (
      0 => 'LDAP\\Result|array<array-key, LDAP\\Result>|false',
      'ldap' => 'LDAP\\Connection|array<array-key, LDAP\\Connection>',
      'base' => 'array<array-key, mixed>|string',
      'filter' => 'array<array-key, mixed>|string',
      'attributes=' => 'array<array-key, mixed>',
      'attributes_only=' => 'int',
      'sizelimit=' => 'int',
      'timelimit=' => 'int',
      'deref=' => 'int',
      'controls=' => 'array<array-key, mixed>|null',
    ),
    'msg_receive' => 
    array (
      0 => 'bool',
      'queue' => 'SysvMessageQueue',
      'desired_message_type' => 'int',
      '&w received_message_type' => 'int',
      'max_message_size' => 'int',
      '&w message' => 'mixed',
      'unserialize=' => 'bool',
      'flags=' => 'int',
      '&w error_code=' => 'int',
    ),
    'msg_send' => 
    array (
      0 => 'bool',
      'queue' => 'SysvMessageQueue',
      'message_type' => 'int',
      'message' => 'mixed',
      'serialize=' => 'bool',
      'blocking=' => 'bool',
      '&w error_code=' => 'int',
    ),
    'msg_stat_queue' => 
    array (
      0 => 'array<array-key, mixed>',
      'queue' => 'SysvMessageQueue',
    ),
    'mysqli::execute_query' => 
    array (
      0 => 'bool|mysqli_result',
      'query' => 'non-empty-string',
      'params=' => 'list<mixed>|null',
    ),
    'mysqli::get_warnings' => 
    array (
      0 => 'mysqli_warning',
    ),
    'mysqli::init' => 
    array (
      0 => 'false|null',
    ),
    'mysqli::options' => 
    array (
      0 => 'bool',
      'option' => 'int',
      'value' => 'int|string',
    ),
    'mysqli::poll' => 
    array (
      0 => 'false|int',
      '&w read' => 'array<array-key, mixed>|null',
      '&w error' => 'array<array-key, mixed>|null',
      '&w reject' => 'array<array-key, mixed>',
      'seconds' => 'int',
      'microseconds=' => 'int',
    ),
    'mysqli::reap_async_query' => 
    array (
      0 => 'false|mysqli_result',
    ),
    'mysqli::set_opt' => 
    array (
      0 => 'bool',
      'option' => 'int',
      'value' => 'int|string',
    ),
    'mysqli::stmt_init' => 
    array (
      0 => 'mysqli_stmt',
    ),
    'mysqli_affected_rows' => 
    array (
      0 => 'int<-1, max>|numeric-string',
      'mysql' => 'mysqli',
    ),
    'mysqli_execute' => 
    array (
      0 => 'bool',
      'statement' => 'mysqli_stmt',
      'params=' => 'list<mixed>|null',
    ),
    'mysqli_execute_query' => 
    array (
      0 => 'bool|mysqli_result',
      'mysql' => 'mysqli',
      'query' => 'non-empty-string',
      'params=' => 'list<mixed>|null',
    ),
    'mysqli_fetch_all' => 
    array (
      0 => 'list<array<array-key, float|int|null|string>>',
      'result' => 'mysqli_result',
      'mode=' => '3',
    ),
    'mysqli_fetch_array' => 
    array (
      0 => 'array<array-key, float|int|null|string>|false|null',
      'result' => 'mysqli_result',
      'mode=' => '3',
    ),
    'mysqli_fetch_assoc' => 
    array (
      0 => 'array<string, float|int|null|string>|false|null',
      'result' => 'mysqli_result',
    ),
    'mysqli_fetch_field' => 
    array (
      0 => 'false|object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}',
      'result' => 'mysqli_result',
    ),
    'mysqli_fetch_field_direct' => 
    array (
      0 => 'false|object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}',
      'result' => 'mysqli_result',
      'index' => 'int',
    ),
    'mysqli_fetch_fields' => 
    array (
      0 => 'list<object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}>',
      'result' => 'mysqli_result',
    ),
    'mysqli_fetch_row' => 
    array (
      0 => 'false|list<float|int|null|string>|null',
      'result' => 'mysqli_result',
    ),
    'mysqli_get_warnings' => 
    array (
      0 => 'mysqli_warning',
      'mysql' => 'mysqli',
    ),
    'mysqli_num_rows' => 
    array (
      0 => 'int<0, max>|numeric-string',
      'result' => 'mysqli_result',
    ),
    'mysqli_options' => 
    array (
      0 => 'bool',
      'mysql' => 'mysqli',
      'option' => 'int',
      'value' => 'int|string',
    ),
    'mysqli_poll' => 
    array (
      0 => 'false|int',
      '&w read' => 'array<array-key, mixed>|null',
      '&w error' => 'array<array-key, mixed>|null',
      '&w reject' => 'array<array-key, mixed>',
      'seconds' => 'int',
      'microseconds=' => 'int',
    ),
    'mysqli_reap_async_query' => 
    array (
      0 => 'false|mysqli_result',
      'mysql' => 'mysqli',
    ),
    'mysqli_result::fetch_all' => 
    array (
      0 => 'list<array<array-key, float|int|null|string>>',
      'mode=' => '3',
    ),
    'mysqli_result::fetch_array' => 
    array (
      0 => 'array<array-key, float|int|null|string>|false|null',
      'mode=' => '3',
    ),
    'mysqli_result::fetch_assoc' => 
    array (
      0 => 'array<string, float|int|null|string>|false|null',
    ),
    'mysqli_result::fetch_field' => 
    array (
      0 => 'false|object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}',
    ),
    'mysqli_result::fetch_field_direct' => 
    array (
      0 => 'false|object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}',
      'index' => 'int',
    ),
    'mysqli_result::fetch_fields' => 
    array (
      0 => 'list<object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}>',
    ),
    'mysqli_result::fetch_row' => 
    array (
      0 => 'false|list<float|int|null|string>|null',
    ),
    'mysqli_set_opt' => 
    array (
      0 => 'bool',
      'mysql' => 'mysqli',
      'option' => 'int',
      'value' => 'int|string',
    ),
    'mysqli_stmt::bind_result' => 
    array (
      0 => 'bool',
      '&...w vars=' => 'mixed',
    ),
    'mysqli_stmt::execute' => 
    array (
      0 => 'bool',
      'params=' => 'list<mixed>|null',
    ),
    'mysqli_stmt::num_rows' => 
    array (
      0 => 'int<0, max>|numeric-string',
    ),
    'mysqli_stmt_affected_rows' => 
    array (
      0 => 'int<-1, max>|numeric-string',
      'statement' => 'mysqli_stmt',
    ),
    'mysqli_stmt_bind_result' => 
    array (
      0 => 'bool',
      'statement' => 'mysqli_stmt',
      '&...w vars=' => 'mixed',
    ),
    'mysqli_stmt_execute' => 
    array (
      0 => 'bool',
      'statement' => 'mysqli_stmt',
      'params=' => 'list<mixed>|null',
    ),
    'mysqli_stmt_init' => 
    array (
      0 => 'mysqli_stmt',
      'mysql' => 'mysqli',
    ),
    'mysqli_stmt_num_rows' => 
    array (
      0 => 'int',
      'statement' => 'mysqli_stmt',
    ),
    'odbc_cursor' => 
    array (
      0 => 'string',
      'statement' => 'Odbc\\Result',
    ),
    'odbc_fetch_into' => 
    array (
      0 => 'int',
      'statement' => 'Odbc\\Result',
      '&w array' => 'array<array-key, mixed>',
      'row=' => 'int|null',
    ),
    'odbc_field_precision' => 
    array (
      0 => 'int',
      'statement' => 'Odbc\\Result',
      'field' => 'int',
    ),
    'snmp2_get' => 
    array (
      0 => 'false|string',
      'hostname' => 'string',
      'community' => 'string',
      'object_id' => 'array<array-key, mixed>|string',
      'timeout=' => 'int',
      'retries=' => 'int',
    ),
    'snmp2_getnext' => 
    array (
      0 => 'false|string',
      'hostname' => 'string',
      'community' => 'string',
      'object_id' => 'array<array-key, mixed>|string',
      'timeout=' => 'int',
      'retries=' => 'int',
    ),
    'snmp3_get' => 
    array (
      0 => 'false|string',
      'hostname' => 'string',
      'security_name' => 'string',
      'security_level' => 'string',
      'auth_protocol' => 'string',
      'auth_passphrase' => 'string',
      'privacy_protocol' => 'string',
      'privacy_passphrase' => 'string',
      'object_id' => 'array<array-key, mixed>|string',
      'timeout=' => 'int',
      'retries=' => 'int',
    ),
    'snmp3_getnext' => 
    array (
      0 => 'false|string',
      'hostname' => 'string',
      'security_name' => 'string',
      'security_level' => 'string',
      'auth_protocol' => 'string',
      'auth_passphrase' => 'string',
      'privacy_protocol' => 'string',
      'privacy_passphrase' => 'string',
      'object_id' => 'array<array-key, mixed>|string',
      'timeout=' => 'int',
      'retries=' => 'int',
    ),
    'snmp::get' => 
    array (
      0 => 'array<array-key, mixed>|false|string',
      'objectId' => 'array<array-key, mixed>|string',
      'preserveKeys=' => 'bool',
    ),
    'snmp::getnext' => 
    array (
      0 => 'array<array-key, mixed>|false|string',
      'objectId' => 'array<array-key, mixed>|string',
    ),
    'snmpget' => 
    array (
      0 => 'false|string',
      'hostname' => 'string',
      'community' => 'string',
      'object_id' => 'array<array-key, mixed>|string',
      'timeout=' => 'int',
      'retries=' => 'int',
    ),
    'snmpgetnext' => 
    array (
      0 => 'false|string',
      'hostname' => 'string',
      'community' => 'string',
      'object_id' => 'array<array-key, mixed>|string',
      'timeout=' => 'int',
      'retries=' => 'int',
    ),
    'snmpset' => 
    array (
      0 => 'bool',
      'hostname' => 'string',
      'community' => 'string',
      'object_id' => 'array<array-key, mixed>|string',
      'type' => 'array<array-key, string>|string',
      'value' => 'array<array-key, string>|string',
      'timeout=' => 'int',
      'retries=' => 'int',
    ),
    'socket_addrinfo_lookup' => 
    array (
      0 => 'array<array-key, AddressInfo>|false',
      'host' => 'string',
      'service=' => 'null|string',
      'hints=' => 'array<array-key, mixed>',
    ),
    'socket_create_pair' => 
    array (
      0 => 'bool',
      'domain' => 'int',
      'type' => 'int',
      'protocol' => 'int',
      '&w pair' => 'array<array-key, Socket>',
    ),
    'socket_export_stream' => 
    array (
      0 => 'false|resource',
      'socket' => 'Socket',
    ),
    'socket_getpeername' => 
    array (
      0 => 'bool',
      'socket' => 'Socket',
      '&w address' => 'string',
      '&w port=' => 'int',
    ),
    'socket_getsockname' => 
    array (
      0 => 'bool',
      'socket' => 'Socket',
      '&w address' => 'string',
      '&w port=' => 'int',
    ),
    'socket_import_stream' => 
    array (
      0 => 'Socket|false',
      'stream' => 'resource',
    ),
    'socket_recv' => 
    array (
      0 => 'false|int',
      'socket' => 'Socket',
      '&w data' => 'string',
      'length' => 'int',
      'flags' => 'int',
    ),
    'socket_recvfrom' => 
    array (
      0 => 'false|int',
      'socket' => 'Socket',
      '&w data' => 'string',
      'length' => 'int',
      'flags' => 'int',
      '&w address' => 'string',
      '&w port=' => 'int',
    ),
    'socket_recvmsg' => 
    array (
      0 => 'false|int',
      'socket' => 'Socket',
      '&w message' => 'array<array-key, mixed>',
      'flags=' => 'int',
    ),
    'socket_select' => 
    array (
      0 => 'false|int',
      '&read' => 'array<array-key, Socket>|null',
      '&write' => 'array<array-key, Socket>|null',
      '&except' => 'array<array-key, Socket>|null',
      'seconds' => 'int|null',
      'microseconds=' => 'int',
    ),
    'socket_set_option' => 
    array (
      0 => 'bool',
      'socket' => 'Socket',
      'level' => 'int',
      'option' => 'int',
      'value' => 'array<array-key, mixed>|int|string',
    ),
    'socket_setopt' => 
    array (
      0 => 'bool',
      'socket' => 'Socket',
      'level' => 'int',
      'option' => 'int',
      'value' => 'array<array-key, mixed>|int|string',
    ),
    'tidy::getoptdoc' => 
    array (
      0 => 'string',
      'option' => 'string',
    ),
    'tidy::repairfile' => 
    array (
      0 => 'string',
      'filename' => 'string',
      'config=' => 'array<array-key, mixed>|null|string',
      'encoding=' => 'null|string',
      'useIncludePath=' => 'bool',
    ),
    'tidy::repairstring' => 
    array (
      0 => 'string',
      'string' => 'string',
      'config=' => 'array<array-key, mixed>|null|string',
      'encoding=' => 'null|string',
    ),
    'tidy_get_error_buffer' => 
    array (
      0 => 'string',
      'tidy' => 'tidy',
    ),
    'tidy_get_opt_doc' => 
    array (
      0 => 'string',
      'tidy' => 'tidy',
      'option' => 'string',
    ),
    'tidy_parse_file' => 
    array (
      0 => 'tidy',
      'filename' => 'string',
      'config=' => 'array<array-key, mixed>|null|string',
      'encoding=' => 'null|string',
      'useIncludePath=' => 'bool',
    ),
    'tidy_parse_string' => 
    array (
      0 => 'tidy',
      'string' => 'string',
      'config=' => 'array<array-key, mixed>|null|string',
      'encoding=' => 'null|string',
    ),
    'tidy_repair_file' => 
    array (
      0 => 'string',
      'filename' => 'string',
      'config=' => 'array<array-key, mixed>|null|string',
      'encoding=' => 'null|string',
      'useIncludePath=' => 'bool',
    ),
    'tidy_repair_string' => 
    array (
      0 => 'string',
      'string' => 'string',
      'config=' => 'array<array-key, mixed>|null|string',
      'encoding=' => 'null|string',
    ),
    'xdebug_call_class' => 
    array (
      0 => 'string',
      'depth=' => 'int',
    ),
    'xdebug_call_file' => 
    array (
      0 => 'string',
      'depth=' => 'int',
    ),
    'xdebug_call_function' => 
    array (
      0 => 'string',
      'depth=' => 'int',
    ),
    'xdebug_call_line' => 
    array (
      0 => 'int',
      'depth=' => 'int',
    ),
    'xdebug_debug_zval' => 
    array (
      0 => 'void',
      '...varname=' => 'string',
    ),
    'xdebug_debug_zval_stdout' => 
    array (
      0 => 'void',
      '...varname=' => 'string',
    ),
    'xdebug_dump_superglobals' => 
    array (
      0 => 'void',
    ),
    'xdebug_get_collected_errors' => 
    array (
      0 => 'string',
      'emptyList=' => 'bool',
    ),
    'xdebug_get_profiler_filename' => 
    array (
      0 => 'false|string',
    ),
    'xdebug_get_tracefile_name' => 
    array (
      0 => 'string',
    ),
    'xdebug_print_function_stack' => 
    array (
      0 => 'array<array-key, mixed>',
      'message=' => 'string',
      'options=' => 'int',
    ),
    'xdebug_set_filter' => 
    array (
      0 => 'void',
      'group' => 'int',
      'listType' => 'int',
      'configuration' => 'array<array-key, mixed>',
    ),
    'xdebug_start_code_coverage' => 
    array (
      0 => 'void',
      'options=' => 'int',
    ),
    'xdebug_start_error_collection' => 
    array (
      0 => 'void',
    ),
    'xdebug_start_function_monitor' => 
    array (
      0 => 'void',
      'listOfFunctionsToMonitor' => 'array<array-key, string>',
    ),
    'xdebug_stop_code_coverage' => 
    array (
      0 => 'void',
      'cleanUp=' => 'bool',
    ),
    'xdebug_stop_error_collection' => 
    array (
      0 => 'void',
    ),
    'xdebug_stop_function_monitor' => 
    array (
      0 => 'void',
    ),
    'xdebug_stop_trace' => 
    array (
      0 => 'void',
    ),
    'xdebug_var_dump' => 
    array (
      0 => 'void',
      '...variable=' => 'mixed',
    ),
    'xsltprocessor::setparameter' => 
    array (
      0 => 'bool',
      'namespace' => 'string',
      'name' => 'string',
      'value=' => 'null|string',
    ),
    'xsltprocessor::transformtodoc' => 
    array (
      0 => 'DOMDocument|false',
      'document' => 'DOMNode',
      'returnClass=' => 'null|string',
    ),
    'xsltprocessor::transformtouri' => 
    array (
      0 => 'int',
      'document' => 'DOMDocument',
      'uri' => 'string',
    ),
    'xsltprocessor::transformtoxml' => 
    array (
      0 => 'false|null|string',
      'document' => 'DOMDocument',
    ),
  ),
  'changed' => 
  array (
    'array_multisort' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        '&array' => 'array<array-key, mixed>',
        '&...rest=' => 'array<array-key, mixed>|int',
      ),
      'new' => 
      array (
        0 => 'true',
        '&array' => 'array<array-key, mixed>',
        '&...rest=' => 'array<array-key, mixed>|int',
      ),
    ),
    'finfo_close' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'finfo' => 'finfo',
      ),
      'new' => 
      array (
        0 => 'true',
        'finfo' => 'finfo',
      ),
    ),
    'ftp_set_option' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'ftp' => 'FTP\\Connection',
        'option' => 'int',
        'value' => 'mixed',
      ),
      'new' => 
      array (
        0 => 'true',
        'ftp' => 'FTP\\Connection',
        'option' => 'int',
        'value' => 'mixed',
      ),
    ),
    'grapheme_stripos' => 
    array (
      'old' => 
      array (
        0 => 'false|int',
        'haystack' => 'string',
        'needle' => 'string',
        'offset=' => 'int',
      ),
      'new' => 
      array (
        0 => 'false|int',
        'haystack' => 'string',
        'needle' => 'string',
        'offset=' => 'int',
        'locale=' => 'string',
      ),
    ),
    'grapheme_stristr' => 
    array (
      'old' => 
      array (
        0 => 'false|string',
        'haystack' => 'string',
        'needle' => 'string',
        'beforeNeedle=' => 'bool',
      ),
      'new' => 
      array (
        0 => 'false|string',
        'haystack' => 'string',
        'needle' => 'string',
        'beforeNeedle=' => 'bool',
        'locale=' => 'string',
      ),
    ),
    'grapheme_strpos' => 
    array (
      'old' => 
      array (
        0 => 'false|int',
        'haystack' => 'string',
        'needle' => 'string',
        'offset=' => 'int',
      ),
      'new' => 
      array (
        0 => 'false|int',
        'haystack' => 'string',
        'needle' => 'string',
        'offset=' => 'int',
        'locale=' => 'string',
      ),
    ),
    'grapheme_strripos' => 
    array (
      'old' => 
      array (
        0 => 'false|int',
        'haystack' => 'string',
        'needle' => 'string',
        'offset=' => 'int',
      ),
      'new' => 
      array (
        0 => 'false|int',
        'haystack' => 'string',
        'needle' => 'string',
        'offset=' => 'int',
        'locale=' => 'string',
      ),
    ),
    'grapheme_strrpos' => 
    array (
      'old' => 
      array (
        0 => 'false|int',
        'haystack' => 'string',
        'needle' => 'string',
        'offset=' => 'int',
      ),
      'new' => 
      array (
        0 => 'false|int',
        'haystack' => 'string',
        'needle' => 'string',
        'offset=' => 'int',
        'locale=' => 'string',
      ),
    ),
    'grapheme_strstr' => 
    array (
      'old' => 
      array (
        0 => 'false|string',
        'haystack' => 'string',
        'needle' => 'string',
        'beforeNeedle=' => 'bool',
      ),
      'new' => 
      array (
        0 => 'false|string',
        'haystack' => 'string',
        'needle' => 'string',
        'beforeNeedle=' => 'bool',
        'locale=' => 'string',
      ),
    ),
    'grapheme_substr' => 
    array (
      'old' => 
      array (
        0 => 'false|string',
        'string' => 'string',
        'offset' => 'int',
        'length=' => 'int|null',
      ),
      'new' => 
      array (
        0 => 'false|string',
        'string' => 'string',
        'offset' => 'int',
        'length=' => 'int|null',
        'locale=' => 'string',
      ),
    ),
    'gzfile' => 
    array (
      'old' => 
      array (
        0 => 'false|list<string>',
        'filename' => 'string',
        'use_include_path=' => 'int',
      ),
      'new' => 
      array (
        0 => 'false|list<string>',
        'filename' => 'string',
        'use_include_path=' => 'bool',
      ),
    ),
    'gzopen' => 
    array (
      'old' => 
      array (
        0 => 'false|resource',
        'filename' => 'string',
        'mode' => 'string',
        'use_include_path=' => 'int',
      ),
      'new' => 
      array (
        0 => 'false|resource',
        'filename' => 'string',
        'mode' => 'string',
        'use_include_path=' => 'bool',
      ),
    ),
    'imagealphablending' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'enable' => 'bool',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'enable' => 'bool',
      ),
    ),
    'imageantialias' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'enable' => 'bool',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'enable' => 'bool',
      ),
    ),
    'imagearc' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'center_x' => 'int',
        'center_y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'start_angle' => 'int',
        'end_angle' => 'int',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'center_x' => 'int',
        'center_y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'start_angle' => 'int',
        'end_angle' => 'int',
        'color' => 'int',
      ),
    ),
    'imagechar' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'font' => 'int',
        'x' => 'int',
        'y' => 'int',
        'char' => 'string',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'font' => 'int',
        'x' => 'int',
        'y' => 'int',
        'char' => 'string',
        'color' => 'int',
      ),
    ),
    'imagecharup' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'font' => 'int',
        'x' => 'int',
        'y' => 'int',
        'char' => 'string',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'font' => 'int',
        'x' => 'int',
        'y' => 'int',
        'char' => 'string',
        'color' => 'int',
      ),
    ),
    'imagecolordeallocate' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'color' => 'int',
      ),
    ),
    'imagecolormatch' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image1' => 'GdImage',
        'image2' => 'GdImage',
      ),
      'new' => 
      array (
        0 => 'true',
        'image1' => 'GdImage',
        'image2' => 'GdImage',
      ),
    ),
    'imagecopy' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'dst_image' => 'GdImage',
        'src_image' => 'GdImage',
        'dst_x' => 'int',
        'dst_y' => 'int',
        'src_x' => 'int',
        'src_y' => 'int',
        'src_width' => 'int',
        'src_height' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'dst_image' => 'GdImage',
        'src_image' => 'GdImage',
        'dst_x' => 'int',
        'dst_y' => 'int',
        'src_x' => 'int',
        'src_y' => 'int',
        'src_width' => 'int',
        'src_height' => 'int',
      ),
    ),
    'imagecopymerge' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'dst_image' => 'GdImage',
        'src_image' => 'GdImage',
        'dst_x' => 'int',
        'dst_y' => 'int',
        'src_x' => 'int',
        'src_y' => 'int',
        'src_width' => 'int',
        'src_height' => 'int',
        'pct' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'dst_image' => 'GdImage',
        'src_image' => 'GdImage',
        'dst_x' => 'int',
        'dst_y' => 'int',
        'src_x' => 'int',
        'src_y' => 'int',
        'src_width' => 'int',
        'src_height' => 'int',
        'pct' => 'int',
      ),
    ),
    'imagecopymergegray' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'dst_image' => 'GdImage',
        'src_image' => 'GdImage',
        'dst_x' => 'int',
        'dst_y' => 'int',
        'src_x' => 'int',
        'src_y' => 'int',
        'src_width' => 'int',
        'src_height' => 'int',
        'pct' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'dst_image' => 'GdImage',
        'src_image' => 'GdImage',
        'dst_x' => 'int',
        'dst_y' => 'int',
        'src_x' => 'int',
        'src_y' => 'int',
        'src_width' => 'int',
        'src_height' => 'int',
        'pct' => 'int',
      ),
    ),
    'imagecopyresampled' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'dst_image' => 'GdImage',
        'src_image' => 'GdImage',
        'dst_x' => 'int',
        'dst_y' => 'int',
        'src_x' => 'int',
        'src_y' => 'int',
        'dst_width' => 'int',
        'dst_height' => 'int',
        'src_width' => 'int',
        'src_height' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'dst_image' => 'GdImage',
        'src_image' => 'GdImage',
        'dst_x' => 'int',
        'dst_y' => 'int',
        'src_x' => 'int',
        'src_y' => 'int',
        'dst_width' => 'int',
        'dst_height' => 'int',
        'src_width' => 'int',
        'src_height' => 'int',
      ),
    ),
    'imagecopyresized' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'dst_image' => 'GdImage',
        'src_image' => 'GdImage',
        'dst_x' => 'int',
        'dst_y' => 'int',
        'src_x' => 'int',
        'src_y' => 'int',
        'dst_width' => 'int',
        'dst_height' => 'int',
        'src_width' => 'int',
        'src_height' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'dst_image' => 'GdImage',
        'src_image' => 'GdImage',
        'dst_x' => 'int',
        'dst_y' => 'int',
        'src_x' => 'int',
        'src_y' => 'int',
        'dst_width' => 'int',
        'dst_height' => 'int',
        'src_width' => 'int',
        'src_height' => 'int',
      ),
    ),
    'imagedashedline' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'x1' => 'int',
        'y1' => 'int',
        'x2' => 'int',
        'y2' => 'int',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'x1' => 'int',
        'y1' => 'int',
        'x2' => 'int',
        'y2' => 'int',
        'color' => 'int',
      ),
    ),
    'imagedestroy' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
      ),
    ),
    'imageellipse' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'center_x' => 'int',
        'center_y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'center_x' => 'int',
        'center_y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'color' => 'int',
      ),
    ),
    'imagefill' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'x' => 'int',
        'y' => 'int',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'x' => 'int',
        'y' => 'int',
        'color' => 'int',
      ),
    ),
    'imagefilledarc' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'center_x' => 'int',
        'center_y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'start_angle' => 'int',
        'end_angle' => 'int',
        'color' => 'int',
        'style' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'center_x' => 'int',
        'center_y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'start_angle' => 'int',
        'end_angle' => 'int',
        'color' => 'int',
        'style' => 'int',
      ),
    ),
    'imagefilledellipse' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'center_x' => 'int',
        'center_y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'center_x' => 'int',
        'center_y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'color' => 'int',
      ),
    ),
    'imagefilledrectangle' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'x1' => 'int',
        'y1' => 'int',
        'x2' => 'int',
        'y2' => 'int',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'x1' => 'int',
        'y1' => 'int',
        'x2' => 'int',
        'y2' => 'int',
        'color' => 'int',
      ),
    ),
    'imagefilltoborder' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'x' => 'int',
        'y' => 'int',
        'border_color' => 'int',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'x' => 'int',
        'y' => 'int',
        'border_color' => 'int',
        'color' => 'int',
      ),
    ),
    'imageflip' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'mode' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'mode' => 'int',
      ),
    ),
    'imagegammacorrect' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'input_gamma' => 'float',
        'output_gamma' => 'float',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'input_gamma' => 'float',
        'output_gamma' => 'float',
      ),
    ),
    'imagelayereffect' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'effect' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'effect' => 'int',
      ),
    ),
    'imageline' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'x1' => 'int',
        'y1' => 'int',
        'x2' => 'int',
        'y2' => 'int',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'x1' => 'int',
        'y1' => 'int',
        'x2' => 'int',
        'y2' => 'int',
        'color' => 'int',
      ),
    ),
    'imagerectangle' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'x1' => 'int',
        'y1' => 'int',
        'x2' => 'int',
        'y2' => 'int',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'x1' => 'int',
        'y1' => 'int',
        'x2' => 'int',
        'y2' => 'int',
        'color' => 'int',
      ),
    ),
    'imageresolution' => 
    array (
      'old' => 
      array (
        0 => 'array<array-key, mixed>|bool',
        'image' => 'GdImage',
        'resolution_x=' => 'int|null',
        'resolution_y=' => 'int|null',
      ),
      'new' => 
      array (
        0 => 'array<array-key, mixed>|true',
        'image' => 'GdImage',
        'resolution_x=' => 'int|null',
        'resolution_y=' => 'int|null',
      ),
    ),
    'imagesavealpha' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'enable' => 'bool',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'enable' => 'bool',
      ),
    ),
    'imagesetbrush' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'brush' => 'GdImage',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'brush' => 'GdImage',
      ),
    ),
    'imagesetclip' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'x1' => 'int',
        'y1' => 'int',
        'x2' => 'int',
        'y2' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'x1' => 'int',
        'y1' => 'int',
        'x2' => 'int',
        'y2' => 'int',
      ),
    ),
    'imagesetpixel' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'x' => 'int',
        'y' => 'int',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'x' => 'int',
        'y' => 'int',
        'color' => 'int',
      ),
    ),
    'imagesetthickness' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'thickness' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'thickness' => 'int',
      ),
    ),
    'imagesettile' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'tile' => 'GdImage',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'tile' => 'GdImage',
      ),
    ),
    'imagestring' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'font' => 'int',
        'x' => 'int',
        'y' => 'int',
        'string' => 'string',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'font' => 'int',
        'x' => 'int',
        'y' => 'int',
        'string' => 'string',
        'color' => 'int',
      ),
    ),
    'imagestringup' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'image' => 'GdImage',
        'font' => 'int',
        'x' => 'int',
        'y' => 'int',
        'string' => 'string',
        'color' => 'int',
      ),
      'new' => 
      array (
        0 => 'true',
        'image' => 'GdImage',
        'font' => 'int',
        'x' => 'int',
        'y' => 'int',
        'string' => 'string',
        'color' => 'int',
      ),
    ),
    'intlcal_create_instance' => 
    array (
      'old' => 
      array (
        0 => 'IntlCalendar|null',
        'timezone=' => 'mixed',
        'locale=' => 'null|string',
      ),
      'new' => 
      array (
        0 => 'IntlCalendar|null',
        'timezone=' => 'DateTimeZone|IntlTimeZone|null|string',
        'locale=' => 'null|string',
      ),
    ),
    'intlcal_set_time_zone' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'calendar' => 'IntlCalendar',
        'timezone' => 'mixed',
      ),
      'new' => 
      array (
        0 => 'bool',
        'calendar' => 'IntlCalendar',
        'timezone' => 'DateTimeZone|IntlTimeZone|null|string',
      ),
    ),
    'intltimezone::createenumeration' => 
    array (
      'old' => 
      array (
        0 => 'IntlIterator|false',
        'countryOrRawOffset=' => 'IntlTimeZone|float|int|null|string',
      ),
      'new' => 
      array (
        0 => 'IntlIterator|false',
        'countryOrRawOffset=' => 'int|null|string',
      ),
    ),
    'intltz_create_enumeration' => 
    array (
      'old' => 
      array (
        0 => 'IntlIterator|false',
        'countryOrRawOffset=' => 'IntlTimeZone|float|int|null|string',
      ),
      'new' => 
      array (
        0 => 'IntlIterator|false',
        'countryOrRawOffset=' => 'int|null|string',
      ),
    ),
    'libxml_set_external_entity_loader' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'resolver_function' => 'callable(string, string, array{directory: null|string, extSubSystem: null|string, extSubURI: null|string, intSubName: null|string}):(null|resource|string)|null',
      ),
      'new' => 
      array (
        0 => 'true',
        'resolver_function' => 'callable(string, string, array{directory: null|string, extSubSystem: null|string, extSubURI: null|string, intSubName: null|string}):(null|resource|string)|null',
      ),
    ),
    'openssl_private_decrypt' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'data' => 'string',
        '&w decrypted_data' => 'string',
        'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
        'padding=' => 'int',
      ),
      'new' => 
      array (
        0 => 'bool',
        'data' => 'string',
        '&w decrypted_data' => 'string',
        'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
        'padding=' => 'int',
        'digest_algo=' => 'null|string',
      ),
    ),
    'openssl_public_encrypt' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'data' => 'string',
        '&w encrypted_data' => 'string',
        'public_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
        'padding=' => 'int',
      ),
      'new' => 
      array (
        0 => 'bool',
        'data' => 'string',
        '&w encrypted_data' => 'string',
        'public_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
        'padding=' => 'int',
        'digest_algo=' => 'null|string',
      ),
    ),
    'openssl_sign' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'data' => 'string',
        '&w signature' => 'string',
        'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
        'algorithm=' => 'int|string',
      ),
      'new' => 
      array (
        0 => 'bool',
        'data' => 'string',
        '&w signature' => 'string',
        'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
        'algorithm=' => 'int|string',
        'padding=' => 'int',
      ),
    ),
    'openssl_verify' => 
    array (
      'old' => 
      array (
        0 => '-1|0|1|false',
        'data' => 'string',
        'signature' => 'string',
        'public_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
        'algorithm=' => 'int|string',
      ),
      'new' => 
      array (
        0 => '-1|0|1|false',
        'data' => 'string',
        'signature' => 'string',
        'public_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
        'algorithm=' => 'int|string',
        'padding=' => 'int',
      ),
    ),
    'readgzfile' => 
    array (
      'old' => 
      array (
        0 => 'false|int',
        'filename' => 'string',
        'use_include_path=' => 'int',
      ),
      'new' => 
      array (
        0 => 'false|int',
        'filename' => 'string',
        'use_include_path=' => 'bool',
      ),
    ),
    'readline_add_history' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'prompt' => 'string',
      ),
      'new' => 
      array (
        0 => 'true',
        'prompt' => 'string',
      ),
    ),
    'readline_callback_handler_install' => 
    array (
      'old' => 
      array (
        0 => 'bool',
        'prompt' => 'string',
        'callback' => 'callable',
      ),
      'new' => 
      array (
        0 => 'true',
        'prompt' => 'string',
        'callback' => 'callable',
      ),
    ),
    'readline_clear_history' => 
    array (
      'old' => 
      array (
        0 => 'bool',
      ),
      'new' => 
      array (
        0 => 'true',
      ),
    ),
    'soapclient::__dorequest' => 
    array (
      'old' => 
      array (
        0 => 'null|string',
        'request' => 'string',
        'location' => 'string',
        'action' => 'string',
        'version' => 'int',
        'oneWay=' => 'bool',
      ),
      'new' => 
      array (
        0 => 'null|string',
        'request' => 'string',
        'location' => 'string',
        'action' => 'string',
        'version' => 'int',
        'oneWay=' => 'bool',
        'uriParserClass=' => 'null|string',
      ),
    ),
    'soapfault::__construct' => 
    array (
      'old' => 
      array (
        0 => 'void',
        'code' => 'array<array-key, mixed>|null|string',
        'string' => 'string',
        'actor=' => 'null|string',
        'details=' => 'mixed|null',
        'name=' => 'null|string',
        'headerFault=' => 'mixed|null',
      ),
      'new' => 
      array (
        0 => 'void',
        'code' => 'array<array-key, mixed>|null|string',
        'string' => 'string',
        'actor=' => 'null|string',
        'details=' => 'mixed|null',
        'name=' => 'null|string',
        'headerFault=' => 'mixed|null',
        'lang=' => 'string',
      ),
    ),
    'soapserver::fault' => 
    array (
      'old' => 
      array (
        0 => 'void',
        'code' => 'string',
        'string' => 'string',
        'actor=' => 'string',
        'details=' => 'string',
        'name=' => 'string',
      ),
      'new' => 
      array (
        0 => 'void',
        'code' => 'string',
        'string' => 'string',
        'actor=' => 'string',
        'details=' => 'string',
        'name=' => 'string',
        'lang=' => 'string',
      ),
    ),
    'splfileobject::fwrite' => 
    array (
      'old' => 
      array (
        0 => 'false|int',
        'data' => 'string',
        'length=' => 'int',
      ),
      'new' => 
      array (
        0 => 'false|int',
        'data' => 'string',
        'length=' => 'int|null',
      ),
    ),
    'spltempfileobject::fwrite' => 
    array (
      'old' => 
      array (
        0 => 'false|int',
        'data' => 'string',
        'length=' => 'int',
      ),
      'new' => 
      array (
        0 => 'false|int',
        'data' => 'string',
        'length=' => 'int|null',
      ),
    ),
  ),
  'removed' => 
  array (
    'amqpbasicproperties::getappid' => 
    array (
      0 => 'null|string',
    ),
    'amqpbasicproperties::getclusterid' => 
    array (
      0 => 'null|string',
    ),
    'amqpbasicproperties::getcontentencoding' => 
    array (
      0 => 'null|string',
    ),
    'amqpbasicproperties::getcontenttype' => 
    array (
      0 => 'null|string',
    ),
    'amqpbasicproperties::getcorrelationid' => 
    array (
      0 => 'null|string',
    ),
    'amqpbasicproperties::getdeliverymode' => 
    array (
      0 => 'int',
    ),
    'amqpbasicproperties::getexpiration' => 
    array (
      0 => 'null|string',
    ),
    'amqpbasicproperties::getheaders' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'amqpbasicproperties::getmessageid' => 
    array (
      0 => 'null|string',
    ),
    'amqpbasicproperties::getpriority' => 
    array (
      0 => 'int',
    ),
    'amqpbasicproperties::getreplyto' => 
    array (
      0 => 'null|string',
    ),
    'amqpbasicproperties::gettimestamp' => 
    array (
      0 => 'int|null',
    ),
    'amqpbasicproperties::gettype' => 
    array (
      0 => 'null|string',
    ),
    'amqpbasicproperties::getuserid' => 
    array (
      0 => 'null|string',
    ),
    'amqpchannel::basicrecover' => 
    array (
      0 => 'void',
      'requeue=' => 'bool',
    ),
    'amqpchannel::committransaction' => 
    array (
      0 => 'void',
    ),
    'amqpchannel::getchannelid' => 
    array (
      0 => 'int',
    ),
    'amqpchannel::getconnection' => 
    array (
      0 => 'AMQPConnection',
    ),
    'amqpchannel::getconsumers' => 
    array (
      0 => 'array<array-key, AMQPQueue>',
    ),
    'amqpchannel::getprefetchcount' => 
    array (
      0 => 'int',
    ),
    'amqpchannel::getprefetchsize' => 
    array (
      0 => 'int',
    ),
    'amqpchannel::isconnected' => 
    array (
      0 => 'bool',
    ),
    'amqpchannel::qos' => 
    array (
      0 => 'void',
      'size' => 'int',
      'count' => 'int',
      'global=' => 'bool',
    ),
    'amqpchannel::rollbacktransaction' => 
    array (
      0 => 'void',
    ),
    'amqpchannel::setconfirmcallback' => 
    array (
      0 => 'void',
      'ackCallback' => 'callable|null',
      'nackCallback=' => 'callable|null',
    ),
    'amqpchannel::setprefetchcount' => 
    array (
      0 => 'void',
      'count' => 'int',
    ),
    'amqpchannel::setprefetchsize' => 
    array (
      0 => 'void',
      'size' => 'int',
    ),
    'amqpchannel::setreturncallback' => 
    array (
      0 => 'void',
      'returnCallback' => 'callable|null',
    ),
    'amqpchannel::starttransaction' => 
    array (
      0 => 'void',
    ),
    'amqpchannel::waitforbasicreturn' => 
    array (
      0 => 'void',
      'timeout=' => 'float',
    ),
    'amqpchannel::waitforconfirm' => 
    array (
      0 => 'void',
      'timeout=' => 'float',
    ),
    'amqpconnection::connect' => 
    array (
      0 => 'void',
    ),
    'amqpconnection::disconnect' => 
    array (
      0 => 'void',
    ),
    'amqpconnection::getcacert' => 
    array (
      0 => 'null|string',
    ),
    'amqpconnection::getcert' => 
    array (
      0 => 'null|string',
    ),
    'amqpconnection::getheartbeatinterval' => 
    array (
      0 => 'int',
    ),
    'amqpconnection::gethost' => 
    array (
      0 => 'string',
    ),
    'amqpconnection::getkey' => 
    array (
      0 => 'null|string',
    ),
    'amqpconnection::getlogin' => 
    array (
      0 => 'string',
    ),
    'amqpconnection::getmaxchannels' => 
    array (
      0 => 'int',
    ),
    'amqpconnection::getmaxframesize' => 
    array (
      0 => 'int',
    ),
    'amqpconnection::getpassword' => 
    array (
      0 => 'string',
    ),
    'amqpconnection::getport' => 
    array (
      0 => 'int',
    ),
    'amqpconnection::getreadtimeout' => 
    array (
      0 => 'float',
    ),
    'amqpconnection::gettimeout' => 
    array (
      0 => 'float',
    ),
    'amqpconnection::getusedchannels' => 
    array (
      0 => 'int',
    ),
    'amqpconnection::getverify' => 
    array (
      0 => 'bool',
    ),
    'amqpconnection::getvhost' => 
    array (
      0 => 'string',
    ),
    'amqpconnection::getwritetimeout' => 
    array (
      0 => 'float',
    ),
    'amqpconnection::isconnected' => 
    array (
      0 => 'bool',
    ),
    'amqpconnection::ispersistent' => 
    array (
      0 => 'bool',
    ),
    'amqpconnection::pconnect' => 
    array (
      0 => 'void',
    ),
    'amqpconnection::pdisconnect' => 
    array (
      0 => 'void',
    ),
    'amqpconnection::preconnect' => 
    array (
      0 => 'void',
    ),
    'amqpconnection::reconnect' => 
    array (
      0 => 'void',
    ),
    'amqpconnection::setcacert' => 
    array (
      0 => 'void',
      'cacert' => 'null|string',
    ),
    'amqpconnection::setcert' => 
    array (
      0 => 'void',
      'cert' => 'null|string',
    ),
    'amqpconnection::sethost' => 
    array (
      0 => 'void',
      'host' => 'string',
    ),
    'amqpconnection::setkey' => 
    array (
      0 => 'void',
      'key' => 'null|string',
    ),
    'amqpconnection::setlogin' => 
    array (
      0 => 'void',
      'login' => 'string',
    ),
    'amqpconnection::setpassword' => 
    array (
      0 => 'void',
      'password' => 'string',
    ),
    'amqpconnection::setport' => 
    array (
      0 => 'void',
      'port' => 'int',
    ),
    'amqpconnection::setreadtimeout' => 
    array (
      0 => 'void',
      'timeout' => 'float',
    ),
    'amqpconnection::settimeout' => 
    array (
      0 => 'void',
      'timeout' => 'float',
    ),
    'amqpconnection::setverify' => 
    array (
      0 => 'void',
      'verify' => 'bool',
    ),
    'amqpconnection::setvhost' => 
    array (
      0 => 'void',
      'vhost' => 'string',
    ),
    'amqpconnection::setwritetimeout' => 
    array (
      0 => 'void',
      'timeout' => 'float',
    ),
    'amqpdecimal::getexponent' => 
    array (
      0 => 'int',
    ),
    'amqpdecimal::getsignificand' => 
    array (
      0 => 'int',
    ),
    'amqpenvelope::getappid' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::getbody' => 
    array (
      0 => 'string',
    ),
    'amqpenvelope::getclusterid' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::getconsumertag' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::getcontentencoding' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::getcontenttype' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::getcorrelationid' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::getdeliverymode' => 
    array (
      0 => 'int',
    ),
    'amqpenvelope::getdeliverytag' => 
    array (
      0 => 'int|null',
    ),
    'amqpenvelope::getexchangename' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::getexpiration' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::getheader' => 
    array (
      0 => 'false|string',
      'headerName' => 'string',
    ),
    'amqpenvelope::getheaders' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'amqpenvelope::getmessageid' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::getpriority' => 
    array (
      0 => 'int',
    ),
    'amqpenvelope::getreplyto' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::getroutingkey' => 
    array (
      0 => 'string',
    ),
    'amqpenvelope::gettimestamp' => 
    array (
      0 => 'int|null',
    ),
    'amqpenvelope::gettype' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::getuserid' => 
    array (
      0 => 'null|string',
    ),
    'amqpenvelope::hasheader' => 
    array (
      0 => 'bool',
      'headerName' => 'string',
    ),
    'amqpenvelope::isredelivery' => 
    array (
      0 => 'bool',
    ),
    'amqpexchange::bind' => 
    array (
      0 => 'void',
      'exchangeName' => 'string',
      'routingKey=' => 'null|string',
      'arguments=' => 'array<array-key, mixed>',
    ),
    'amqpexchange::declareexchange' => 
    array (
      0 => 'void',
    ),
    'amqpexchange::delete' => 
    array (
      0 => 'void',
      'exchangeName=' => 'null|string',
      'flags=' => 'int|null',
    ),
    'amqpexchange::getargument' => 
    array (
      0 => 'false|int|string',
      'argumentName' => 'string',
    ),
    'amqpexchange::getarguments' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'amqpexchange::getchannel' => 
    array (
      0 => 'AMQPChannel',
    ),
    'amqpexchange::getconnection' => 
    array (
      0 => 'AMQPConnection',
    ),
    'amqpexchange::getflags' => 
    array (
      0 => 'int',
    ),
    'amqpexchange::getname' => 
    array (
      0 => 'null|string',
    ),
    'amqpexchange::gettype' => 
    array (
      0 => 'null|string',
    ),
    'amqpexchange::hasargument' => 
    array (
      0 => 'bool',
      'argumentName' => 'string',
    ),
    'amqpexchange::publish' => 
    array (
      0 => 'void',
      'message' => 'string',
      'routingKey=' => 'null|string',
      'flags=' => 'int|null',
      'headers=' => 'array<array-key, mixed>',
    ),
    'amqpexchange::setargument' => 
    array (
      0 => 'void',
      'argumentName' => 'string',
      'argumentValue' => 'int|string',
    ),
    'amqpexchange::setarguments' => 
    array (
      0 => 'void',
      'arguments' => 'array<array-key, mixed>',
    ),
    'amqpexchange::setflags' => 
    array (
      0 => 'void',
      'flags' => 'int|null',
    ),
    'amqpexchange::setname' => 
    array (
      0 => 'void',
      'exchangeName' => 'null|string',
    ),
    'amqpexchange::settype' => 
    array (
      0 => 'void',
      'exchangeType' => 'null|string',
    ),
    'amqpexchange::unbind' => 
    array (
      0 => 'void',
      'exchangeName' => 'string',
      'routingKey=' => 'null|string',
      'arguments=' => 'array<array-key, mixed>',
    ),
    'amqpqueue::ack' => 
    array (
      0 => 'void',
      'deliveryTag' => 'int',
      'flags=' => 'int|null',
    ),
    'amqpqueue::bind' => 
    array (
      0 => 'void',
      'exchangeName' => 'string',
      'routingKey=' => 'null|string',
      'arguments=' => 'array<array-key, mixed>',
    ),
    'amqpqueue::cancel' => 
    array (
      0 => 'void',
      'consumerTag=' => 'string',
    ),
    'amqpqueue::consume' => 
    array (
      0 => 'void',
      'callback=' => 'callable|null',
      'flags=' => 'int|null',
      'consumerTag=' => 'null|string',
    ),
    'amqpqueue::declarequeue' => 
    array (
      0 => 'int',
    ),
    'amqpqueue::delete' => 
    array (
      0 => 'int',
      'flags=' => 'int|null',
    ),
    'amqpqueue::get' => 
    array (
      0 => 'AMQPEnvelope|null',
      'flags=' => 'int|null',
    ),
    'amqpqueue::getargument' => 
    array (
      0 => 'false|int|string',
      'argumentName' => 'string',
    ),
    'amqpqueue::getarguments' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'amqpqueue::getchannel' => 
    array (
      0 => 'AMQPChannel',
    ),
    'amqpqueue::getconnection' => 
    array (
      0 => 'AMQPConnection',
    ),
    'amqpqueue::getconsumertag' => 
    array (
      0 => 'null|string',
    ),
    'amqpqueue::getflags' => 
    array (
      0 => 'int',
    ),
    'amqpqueue::getname' => 
    array (
      0 => 'null|string',
    ),
    'amqpqueue::hasargument' => 
    array (
      0 => 'bool',
      'argumentName' => 'string',
    ),
    'amqpqueue::nack' => 
    array (
      0 => 'void',
      'deliveryTag' => 'int',
      'flags=' => 'int|null',
    ),
    'amqpqueue::purge' => 
    array (
      0 => 'int',
    ),
    'amqpqueue::reject' => 
    array (
      0 => 'void',
      'deliveryTag' => 'int',
      'flags=' => 'int|null',
    ),
    'amqpqueue::setargument' => 
    array (
      0 => 'void',
      'argumentName' => 'string',
      'argumentValue' => 'mixed',
    ),
    'amqpqueue::setarguments' => 
    array (
      0 => 'void',
      'arguments' => 'array<array-key, mixed>',
    ),
    'amqpqueue::setflags' => 
    array (
      0 => 'void',
      'flags' => 'int|null',
    ),
    'amqpqueue::setname' => 
    array (
      0 => 'void',
      'name' => 'string',
    ),
    'amqpqueue::unbind' => 
    array (
      0 => 'void',
      'exchangeName' => 'string',
      'routingKey=' => 'null|string',
      'arguments=' => 'array<array-key, mixed>',
    ),
    'amqptimestamp::__construct' => 
    array (
      0 => 'void',
      'timestamp' => 'float',
    ),
    'amqptimestamp::__tostring' => 
    array (
      0 => 'string',
    ),
    'amqptimestamp::gettimestamp' => 
    array (
      0 => 'float',
    ),
    'apcu_add' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value=' => 'mixed',
      'ttl=' => 'int',
    ),
    'apcu_cache_info' => 
    array (
      0 => 'array<string, mixed>|false',
      'limited=' => 'bool',
    ),
    'apcu_cas' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'old' => 'int',
      'new' => 'int',
    ),
    'apcu_clear_cache' => 
    array (
      0 => 'bool',
    ),
    'apcu_dec' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'step=' => 'int',
      '&w success=' => 'bool',
      'ttl=' => 'int',
    ),
    'apcu_delete' => 
    array (
      0 => 'bool',
      'key' => 'APCuIterator|string',
    ),
    'apcu_enabled' => 
    array (
      0 => 'bool',
    ),
    'apcu_entry' => 
    array (
      0 => 'mixed',
      'key' => 'string',
      'callback' => 'callable(string):mixed',
      'ttl=' => 'int',
    ),
    'apcu_exists' => 
    array (
      0 => 'bool',
      'key' => 'string',
    ),
    'apcu_fetch' => 
    array (
      0 => 'false|mixed',
      'key' => 'string',
      '&w success=' => 'bool',
    ),
    'apcu_inc' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'step=' => 'int',
      '&w success=' => 'bool',
      'ttl=' => 'int',
    ),
    'apcu_key_info' => 
    array (
      0 => 'array<array-key, mixed>|null',
      'key' => 'string',
    ),
    'apcu_sma_info' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'limited=' => 'bool',
    ),
    'apcu_store' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value=' => 'mixed',
      'ttl=' => 'int',
    ),
    'apcuiterator::__construct' => 
    array (
      0 => 'void',
      'search=' => 'array<array-key, string>|null|string',
      'format=' => 'int',
      'chunk_size=' => 'int',
      'list=' => 'int',
    ),
    'apcuiterator::gettotalcount' => 
    array (
      0 => 'int',
    ),
    'apcuiterator::gettotalhits' => 
    array (
      0 => 'int',
    ),
    'apcuiterator::gettotalsize' => 
    array (
      0 => 'int',
    ),
    'apcuiterator::key' => 
    array (
      0 => 'string',
    ),
    'apcuiterator::next' => 
    array (
      0 => 'void',
    ),
    'apcuiterator::rewind' => 
    array (
      0 => 'void',
    ),
    'apcuiterator::valid' => 
    array (
      0 => 'bool',
    ),
    'chroot' => 
    array (
      0 => 'bool',
      'directory' => 'string',
    ),
    'ds\\deque::allocate' => 
    array (
      0 => 'void',
      'capacity' => 'int',
    ),
    'ds\\deque::apply' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'ds\\deque::clear' => 
    array (
      0 => 'void',
    ),
    'ds\\deque::get' => 
    array (
      0 => 'void',
      'index' => 'int',
    ),
    'ds\\deque::insert' => 
    array (
      0 => 'void',
      'index' => 'int',
      '...values=' => 'mixed',
    ),
    'ds\\deque::jsonserialize' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'ds\\deque::push' => 
    array (
      0 => 'void',
      '...values=' => 'mixed',
    ),
    'ds\\deque::reverse' => 
    array (
      0 => 'void',
    ),
    'ds\\deque::rotate' => 
    array (
      0 => 'void',
      'rotations' => 'int',
    ),
    'ds\\deque::set' => 
    array (
      0 => 'void',
      'index' => 'int',
      'value' => 'mixed',
    ),
    'ds\\deque::sort' => 
    array (
      0 => 'void',
      'comparator=' => 'callable|null',
    ),
    'ds\\deque::sum' => 
    array (
      0 => 'float|int',
    ),
    'ds\\deque::unshift' => 
    array (
      0 => 'void',
      '...values=' => 'mixed',
    ),
    'ds\\map::allocate' => 
    array (
      0 => 'void',
      'capacity' => 'int',
    ),
    'ds\\map::apply' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'ds\\map::clear' => 
    array (
      0 => 'void',
    ),
    'ds\\map::jsonserialize' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'ds\\map::ksort' => 
    array (
      0 => 'void',
      'comparator=' => 'callable|null',
    ),
    'ds\\map::put' => 
    array (
      0 => 'void',
      'key' => 'mixed',
      'value' => 'mixed',
    ),
    'ds\\map::putall' => 
    array (
      0 => 'void',
      'values' => 'mixed',
    ),
    'ds\\map::reverse' => 
    array (
      0 => 'void',
    ),
    'ds\\map::sort' => 
    array (
      0 => 'void',
      'comparator=' => 'callable|null',
    ),
    'ds\\map::sum' => 
    array (
      0 => 'float|int',
    ),
    'ds\\map::union' => 
    array (
      0 => 'Ds\\Map',
      'map' => 'Ds\\Map',
    ),
    'ds\\pair::jsonserialize' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'ds\\priorityqueue::allocate' => 
    array (
      0 => 'void',
      'capacity' => 'int',
    ),
    'ds\\priorityqueue::clear' => 
    array (
      0 => 'void',
    ),
    'ds\\priorityqueue::jsonserialize' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'ds\\priorityqueue::push' => 
    array (
      0 => 'void',
      'value' => 'mixed',
      'priority' => 'int',
    ),
    'ds\\queue::allocate' => 
    array (
      0 => 'void',
      'capacity' => 'int',
    ),
    'ds\\queue::clear' => 
    array (
      0 => 'void',
    ),
    'ds\\queue::jsonserialize' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'ds\\queue::push' => 
    array (
      0 => 'void',
      '...values=' => 'mixed',
    ),
    'ds\\set::add' => 
    array (
      0 => 'void',
      '...values=' => 'mixed',
    ),
    'ds\\set::allocate' => 
    array (
      0 => 'void',
      'capacity' => 'int',
    ),
    'ds\\set::clear' => 
    array (
      0 => 'void',
    ),
    'ds\\set::join' => 
    array (
      0 => 'string',
      'glue=' => 'string',
    ),
    'ds\\set::jsonserialize' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'ds\\set::remove' => 
    array (
      0 => 'void',
      '...values=' => 'mixed',
    ),
    'ds\\set::reverse' => 
    array (
      0 => 'void',
    ),
    'ds\\set::sort' => 
    array (
      0 => 'void',
      'comparator=' => 'callable|null',
    ),
    'ds\\set::sum' => 
    array (
      0 => 'float|int',
    ),
    'ds\\stack::allocate' => 
    array (
      0 => 'void',
      'capacity' => 'int',
    ),
    'ds\\stack::clear' => 
    array (
      0 => 'void',
    ),
    'ds\\stack::jsonserialize' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'ds\\stack::push' => 
    array (
      0 => 'void',
      '...values=' => 'mixed',
    ),
    'ds\\vector::allocate' => 
    array (
      0 => 'void',
      'capacity' => 'int',
    ),
    'ds\\vector::apply' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'ds\\vector::clear' => 
    array (
      0 => 'void',
    ),
    'ds\\vector::insert' => 
    array (
      0 => 'void',
      'index' => 'int',
      '...values=' => 'mixed',
    ),
    'ds\\vector::jsonserialize' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'ds\\vector::push' => 
    array (
      0 => 'void',
      '...values=' => 'mixed',
    ),
    'ds\\vector::reverse' => 
    array (
      0 => 'void',
    ),
    'ds\\vector::rotate' => 
    array (
      0 => 'void',
      'rotations' => 'int',
    ),
    'ds\\vector::set' => 
    array (
      0 => 'void',
      'index' => 'int',
      'value' => 'mixed',
    ),
    'ds\\vector::sort' => 
    array (
      0 => 'void',
      'comparator=' => 'callable|null',
    ),
    'ds\\vector::sum' => 
    array (
      0 => 'float|int',
    ),
    'ds\\vector::unshift' => 
    array (
      0 => 'void',
      '...values=' => 'mixed',
    ),
    'ev::backend' => 
    array (
      0 => 'int',
    ),
    'ev::depth' => 
    array (
      0 => 'int',
    ),
    'ev::embeddablebackends' => 
    array (
      0 => 'int',
    ),
    'ev::feedsignal' => 
    array (
      0 => 'void',
      'signum' => 'int',
    ),
    'ev::feedsignalevent' => 
    array (
      0 => 'void',
      'signum' => 'int',
    ),
    'ev::iteration' => 
    array (
      0 => 'int',
    ),
    'ev::now' => 
    array (
      0 => 'float',
    ),
    'ev::nowupdate' => 
    array (
      0 => 'void',
    ),
    'ev::recommendedbackends' => 
    array (
      0 => 'int',
    ),
    'ev::resume' => 
    array (
      0 => 'void',
    ),
    'ev::run' => 
    array (
      0 => 'void',
      'flags=' => 'int',
    ),
    'ev::sleep' => 
    array (
      0 => 'void',
      'seconds' => 'float',
    ),
    'ev::stop' => 
    array (
      0 => 'void',
      'how=' => 'int',
    ),
    'ev::supportedbackends' => 
    array (
      0 => 'int',
    ),
    'ev::suspend' => 
    array (
      0 => 'void',
    ),
    'ev::time' => 
    array (
      0 => 'float',
    ),
    'ev::verify' => 
    array (
      0 => 'void',
    ),
    'evcheck::__construct' => 
    array (
      0 => 'void',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evcheck::clear' => 
    array (
      0 => 'int',
    ),
    'evcheck::createstopped' => 
    array (
      0 => 'EvCheck',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evcheck::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evcheck::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evcheck::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evcheck::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evcheck::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evcheck::start' => 
    array (
      0 => 'void',
    ),
    'evcheck::stop' => 
    array (
      0 => 'void',
    ),
    'evchild::__construct' => 
    array (
      0 => 'void',
      'pid' => 'int',
      'trace' => 'bool',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evchild::clear' => 
    array (
      0 => 'int',
    ),
    'evchild::createstopped' => 
    array (
      0 => 'EvChild',
      'pid' => 'int',
      'trace' => 'bool',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evchild::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evchild::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evchild::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evchild::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evchild::set' => 
    array (
      0 => 'void',
      'pid' => 'int',
      'trace' => 'bool',
    ),
    'evchild::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evchild::start' => 
    array (
      0 => 'void',
    ),
    'evchild::stop' => 
    array (
      0 => 'void',
    ),
    'evembed::__construct' => 
    array (
      0 => 'void',
      'other' => 'EvLoop',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evembed::clear' => 
    array (
      0 => 'int',
    ),
    'evembed::createstopped' => 
    array (
      0 => 'EvEmbed',
      'other' => 'EvLoop',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evembed::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evembed::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evembed::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evembed::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evembed::set' => 
    array (
      0 => 'void',
      'other' => 'EvLoop',
    ),
    'evembed::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evembed::start' => 
    array (
      0 => 'void',
    ),
    'evembed::stop' => 
    array (
      0 => 'void',
    ),
    'evembed::sweep' => 
    array (
      0 => 'void',
    ),
    'event::__construct' => 
    array (
      0 => 'void',
      'base' => 'EventBase',
      'fd' => 'mixed',
      'what' => 'int',
      'cb' => 'callable',
      'arg=' => 'mixed',
    ),
    'event::add' => 
    array (
      0 => 'bool',
      'timeout=' => 'float',
    ),
    'event::addsignal' => 
    array (
      0 => 'bool',
      'timeout=' => 'float',
    ),
    'event::addtimer' => 
    array (
      0 => 'bool',
      'timeout=' => 'float',
    ),
    'event::del' => 
    array (
      0 => 'bool',
    ),
    'event::delsignal' => 
    array (
      0 => 'bool',
    ),
    'event::deltimer' => 
    array (
      0 => 'bool',
    ),
    'event::free' => 
    array (
      0 => 'void',
    ),
    'event::getsupportedmethods' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'event::pending' => 
    array (
      0 => 'bool',
      'flags' => 'int',
    ),
    'event::set' => 
    array (
      0 => 'bool',
      'base' => 'EventBase',
      'fd' => 'mixed',
      'what=' => 'int',
      'cb=' => 'callable|null',
      'arg=' => 'mixed',
    ),
    'event::setpriority' => 
    array (
      0 => 'bool',
      'priority' => 'int',
    ),
    'event::settimer' => 
    array (
      0 => 'bool',
      'base' => 'EventBase',
      'cb' => 'callable',
      'arg=' => 'mixed',
    ),
    'event::signal' => 
    array (
      0 => 'Event',
      'base' => 'EventBase',
      'signum' => 'int',
      'cb' => 'callable',
      'arg=' => 'mixed',
    ),
    'event::timer' => 
    array (
      0 => 'Event',
      'base' => 'EventBase',
      'cb' => 'callable',
      'arg=' => 'mixed',
    ),
    'eventbase::__construct' => 
    array (
      0 => 'void',
      'cfg=' => 'EventConfig|null',
    ),
    'eventbase::dispatch' => 
    array (
      0 => 'bool',
    ),
    'eventbase::exit' => 
    array (
      0 => 'bool',
      'timeout=' => 'float',
    ),
    'eventbase::free' => 
    array (
      0 => 'void',
    ),
    'eventbase::getfeatures' => 
    array (
      0 => 'int',
    ),
    'eventbase::getmethod' => 
    array (
      0 => 'string',
    ),
    'eventbase::gettimeofdaycached' => 
    array (
      0 => 'float',
    ),
    'eventbase::gotexit' => 
    array (
      0 => 'bool',
    ),
    'eventbase::gotstop' => 
    array (
      0 => 'bool',
    ),
    'eventbase::loop' => 
    array (
      0 => 'bool',
      'flags=' => 'int',
    ),
    'eventbase::priorityinit' => 
    array (
      0 => 'bool',
      'n_priorities' => 'int',
    ),
    'eventbase::reinit' => 
    array (
      0 => 'bool',
    ),
    'eventbase::stop' => 
    array (
      0 => 'bool',
    ),
    'eventbuffer::add' => 
    array (
      0 => 'bool',
      'data' => 'string',
    ),
    'eventbuffer::addbuffer' => 
    array (
      0 => 'bool',
      'buf' => 'EventBuffer',
    ),
    'eventbuffer::appendfrom' => 
    array (
      0 => 'int',
      'buf' => 'EventBuffer',
      'len' => 'int',
    ),
    'eventbuffer::copyout' => 
    array (
      0 => 'int',
      '&w data' => 'string',
      'max_bytes' => 'int',
    ),
    'eventbuffer::drain' => 
    array (
      0 => 'bool',
      'len' => 'int',
    ),
    'eventbuffer::enablelocking' => 
    array (
      0 => 'void',
    ),
    'eventbuffer::expand' => 
    array (
      0 => 'bool',
      'len' => 'int',
    ),
    'eventbuffer::freeze' => 
    array (
      0 => 'bool',
      'at_front' => 'bool',
    ),
    'eventbuffer::lock' => 
    array (
      0 => 'void',
      'at_front' => 'bool',
    ),
    'eventbuffer::prepend' => 
    array (
      0 => 'bool',
      'data' => 'string',
    ),
    'eventbuffer::prependbuffer' => 
    array (
      0 => 'bool',
      'buf' => 'EventBuffer',
    ),
    'eventbuffer::pullup' => 
    array (
      0 => 'null|string',
      'size' => 'int',
    ),
    'eventbuffer::read' => 
    array (
      0 => 'string',
      'max_bytes' => 'int',
    ),
    'eventbuffer::readfrom' => 
    array (
      0 => 'int',
      'fd' => 'mixed',
      'howmuch=' => 'int',
    ),
    'eventbuffer::readline' => 
    array (
      0 => 'null|string',
      'eol_style' => 'int',
    ),
    'eventbuffer::search' => 
    array (
      0 => 'false|int',
      'what' => 'string',
      'start=' => 'int',
      'end=' => 'int',
    ),
    'eventbuffer::searcheol' => 
    array (
      0 => 'false|int',
      'start=' => 'int',
      'eol_style=' => 'int',
    ),
    'eventbuffer::substr' => 
    array (
      0 => 'string',
      'start' => 'int',
      'length=' => 'int',
    ),
    'eventbuffer::unfreeze' => 
    array (
      0 => 'bool',
      'at_front' => 'bool',
    ),
    'eventbuffer::unlock' => 
    array (
      0 => 'void',
      'at_front' => 'bool',
    ),
    'eventbuffer::write' => 
    array (
      0 => 'int',
      'fd' => 'mixed',
      'howmuch=' => 'int',
    ),
    'eventbufferevent::__construct' => 
    array (
      0 => 'void',
      'base' => 'EventBase',
      'socket=' => 'mixed',
      'options=' => 'int',
      'readcb=' => 'callable|null',
      'writecb=' => 'callable|null',
      'eventcb=' => 'callable|null',
      'arg=' => 'mixed',
    ),
    'eventbufferevent::close' => 
    array (
      0 => 'void',
    ),
    'eventbufferevent::connect' => 
    array (
      0 => 'bool',
      'addr' => 'string',
    ),
    'eventbufferevent::connecthost' => 
    array (
      0 => 'bool',
      'dns_base' => 'EventDnsBase|null',
      'hostname' => 'string',
      'port' => 'int',
      'family=' => 'int',
    ),
    'eventbufferevent::createpair' => 
    array (
      0 => 'array<array-key, mixed>',
      'base' => 'EventBase',
      'options=' => 'int',
    ),
    'eventbufferevent::disable' => 
    array (
      0 => 'bool',
      'events' => 'int',
    ),
    'eventbufferevent::enable' => 
    array (
      0 => 'bool',
      'events' => 'int',
    ),
    'eventbufferevent::free' => 
    array (
      0 => 'void',
    ),
    'eventbufferevent::getdnserrorstring' => 
    array (
      0 => 'string',
    ),
    'eventbufferevent::getenabled' => 
    array (
      0 => 'int',
    ),
    'eventbufferevent::getinput' => 
    array (
      0 => 'EventBuffer',
    ),
    'eventbufferevent::getoutput' => 
    array (
      0 => 'EventBuffer',
    ),
    'eventbufferevent::read' => 
    array (
      0 => 'null|string',
      'size' => 'int',
    ),
    'eventbufferevent::readbuffer' => 
    array (
      0 => 'bool',
      'buf' => 'EventBuffer',
    ),
    'eventbufferevent::setcallbacks' => 
    array (
      0 => 'void',
      'readcb' => 'callable|null',
      'writecb' => 'callable|null',
      'eventcb' => 'callable|null',
      'arg=' => 'string',
    ),
    'eventbufferevent::setpriority' => 
    array (
      0 => 'bool',
      'priority' => 'int',
    ),
    'eventbufferevent::settimeouts' => 
    array (
      0 => 'bool',
      'timeout_read' => 'float',
      'timeout_write' => 'float',
    ),
    'eventbufferevent::setwatermark' => 
    array (
      0 => 'void',
      'events' => 'int',
      'lowmark' => 'int',
      'highmark' => 'int',
    ),
    'eventbufferevent::sslerror' => 
    array (
      0 => 'string',
    ),
    'eventbufferevent::sslgetcipherinfo' => 
    array (
      0 => 'string',
    ),
    'eventbufferevent::sslgetciphername' => 
    array (
      0 => 'string',
    ),
    'eventbufferevent::sslgetcipherversion' => 
    array (
      0 => 'string',
    ),
    'eventbufferevent::sslgetprotocol' => 
    array (
      0 => 'string',
    ),
    'eventbufferevent::sslrenegotiate' => 
    array (
      0 => 'void',
    ),
    'eventbufferevent::sslsocket' => 
    array (
      0 => 'EventBufferEvent',
      'base' => 'EventBase',
      'socket' => 'mixed',
      'ctx' => 'EventSslContext',
      'state' => 'int',
      'options=' => 'int',
    ),
    'eventbufferevent::write' => 
    array (
      0 => 'bool',
      'data' => 'string',
    ),
    'eventbufferevent::writebuffer' => 
    array (
      0 => 'bool',
      'buf' => 'EventBuffer',
    ),
    'eventconfig::avoidmethod' => 
    array (
      0 => 'bool',
      'method' => 'string',
    ),
    'eventconfig::requirefeatures' => 
    array (
      0 => 'bool',
      'feature' => 'int',
    ),
    'eventconfig::setmaxdispatchinterval' => 
    array (
      0 => 'void',
      'max_interval' => 'int',
      'max_callbacks' => 'int',
      'min_priority' => 'int',
    ),
    'eventdnsbase::__construct' => 
    array (
      0 => 'void',
      'base' => 'EventBase',
      'initialize' => 'bool',
    ),
    'eventdnsbase::addnameserverip' => 
    array (
      0 => 'bool',
      'ip' => 'string',
    ),
    'eventdnsbase::addsearch' => 
    array (
      0 => 'void',
      'domain' => 'string',
    ),
    'eventdnsbase::clearsearch' => 
    array (
      0 => 'void',
    ),
    'eventdnsbase::countnameservers' => 
    array (
      0 => 'int',
    ),
    'eventdnsbase::loadhosts' => 
    array (
      0 => 'bool',
      'hosts' => 'string',
    ),
    'eventdnsbase::parseresolvconf' => 
    array (
      0 => 'bool',
      'flags' => 'int',
      'filename' => 'string',
    ),
    'eventdnsbase::setoption' => 
    array (
      0 => 'bool',
      'option' => 'string',
      'value' => 'string',
    ),
    'eventdnsbase::setsearchndots' => 
    array (
      0 => 'void',
      'ndots' => 'int',
    ),
    'eventhttp::accept' => 
    array (
      0 => 'bool',
      'socket' => 'mixed',
    ),
    'eventhttp::addserveralias' => 
    array (
      0 => 'bool',
      'alias' => 'string',
    ),
    'eventhttp::bind' => 
    array (
      0 => 'bool',
      'address' => 'string',
      'port' => 'int',
    ),
    'eventhttp::removeserveralias' => 
    array (
      0 => 'bool',
      'alias' => 'string',
    ),
    'eventhttp::setallowedmethods' => 
    array (
      0 => 'void',
      'methods' => 'int',
    ),
    'eventhttp::setcallback' => 
    array (
      0 => 'bool',
      'path' => 'string',
      'cb' => 'callable',
      'arg=' => 'string',
    ),
    'eventhttp::setdefaultcallback' => 
    array (
      0 => 'void',
      'cb' => 'callable',
      'arg=' => 'string',
    ),
    'eventhttp::setmaxbodysize' => 
    array (
      0 => 'void',
      'value' => 'int',
    ),
    'eventhttp::setmaxheaderssize' => 
    array (
      0 => 'void',
      'value' => 'int',
    ),
    'eventhttp::settimeout' => 
    array (
      0 => 'void',
      'value' => 'int',
    ),
    'eventhttpconnection::__construct' => 
    array (
      0 => 'void',
      'base' => 'EventBase',
      'dns_base' => 'EventDnsBase|null',
      'address' => 'string',
      'port' => 'int',
      'ctx=' => 'EventSslContext|null',
    ),
    'eventhttpconnection::getbase' => 
    array (
      0 => 'EventBase',
    ),
    'eventhttpconnection::getpeer' => 
    array (
      0 => 'void',
      '&w address' => 'string',
      '&w port' => 'int',
    ),
    'eventhttpconnection::makerequest' => 
    array (
      0 => 'bool|null',
      'req' => 'EventHttpRequest',
      'type' => 'int',
      'uri' => 'string',
    ),
    'eventhttpconnection::setclosecallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
      'data=' => 'mixed',
    ),
    'eventhttpconnection::setlocaladdress' => 
    array (
      0 => 'void',
      'address' => 'string',
    ),
    'eventhttpconnection::setlocalport' => 
    array (
      0 => 'void',
      'port' => 'int',
    ),
    'eventhttpconnection::setmaxbodysize' => 
    array (
      0 => 'void',
      'max_size' => 'int',
    ),
    'eventhttpconnection::setmaxheaderssize' => 
    array (
      0 => 'void',
      'max_size' => 'int',
    ),
    'eventhttpconnection::setretries' => 
    array (
      0 => 'void',
      'retries' => 'int',
    ),
    'eventhttpconnection::settimeout' => 
    array (
      0 => 'void',
      'timeout' => 'int',
    ),
    'eventhttprequest::__construct' => 
    array (
      0 => 'void',
      'callback' => 'callable',
      'data=' => 'mixed',
    ),
    'eventhttprequest::addheader' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'string',
      'type' => 'int',
    ),
    'eventhttprequest::cancel' => 
    array (
      0 => 'void',
    ),
    'eventhttprequest::clearheaders' => 
    array (
      0 => 'void',
    ),
    'eventhttprequest::closeconnection' => 
    array (
      0 => 'void',
    ),
    'eventhttprequest::findheader' => 
    array (
      0 => 'null|string',
      'key' => 'string',
      'type' => 'int',
    ),
    'eventhttprequest::free' => 
    array (
      0 => 'void',
    ),
    'eventhttprequest::getbufferevent' => 
    array (
      0 => 'EventBufferEvent|null',
    ),
    'eventhttprequest::getcommand' => 
    array (
      0 => 'int',
    ),
    'eventhttprequest::getconnection' => 
    array (
      0 => 'EventHttpConnection|null',
    ),
    'eventhttprequest::gethost' => 
    array (
      0 => 'string',
    ),
    'eventhttprequest::getinputbuffer' => 
    array (
      0 => 'EventBuffer',
    ),
    'eventhttprequest::getinputheaders' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'eventhttprequest::getoutputbuffer' => 
    array (
      0 => 'EventBuffer',
    ),
    'eventhttprequest::getoutputheaders' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'eventhttprequest::getresponsecode' => 
    array (
      0 => 'int',
    ),
    'eventhttprequest::geturi' => 
    array (
      0 => 'string',
    ),
    'eventhttprequest::removeheader' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'type' => 'int',
    ),
    'eventhttprequest::senderror' => 
    array (
      0 => 'void',
      'error' => 'int',
      'reason=' => 'null|string',
    ),
    'eventhttprequest::sendreply' => 
    array (
      0 => 'void',
      'code' => 'int',
      'reason' => 'string',
      'buf=' => 'EventBuffer|null',
    ),
    'eventhttprequest::sendreplychunk' => 
    array (
      0 => 'void',
      'buf' => 'EventBuffer',
    ),
    'eventhttprequest::sendreplyend' => 
    array (
      0 => 'void',
    ),
    'eventhttprequest::sendreplystart' => 
    array (
      0 => 'void',
      'code' => 'int',
      'reason' => 'string',
    ),
    'eventlistener::__construct' => 
    array (
      0 => 'void',
      'base' => 'EventBase',
      'cb' => 'callable',
      'data' => 'mixed',
      'flags' => 'int',
      'backlog' => 'int',
      'target' => 'mixed',
    ),
    'eventlistener::disable' => 
    array (
      0 => 'bool',
    ),
    'eventlistener::enable' => 
    array (
      0 => 'bool',
    ),
    'eventlistener::getbase' => 
    array (
      0 => 'EventBase',
    ),
    'eventlistener::getsocketname' => 
    array (
      0 => 'bool',
      '&w address' => 'string',
      '&w port' => 'mixed',
    ),
    'eventlistener::setcallback' => 
    array (
      0 => 'void',
      'cb' => 'callable',
      'arg=' => 'mixed',
    ),
    'eventlistener::seterrorcallback' => 
    array (
      0 => 'void',
      'cb' => 'callable',
    ),
    'eventsslcontext::__construct' => 
    array (
      0 => 'void',
      'method' => 'int',
      'options' => 'array<array-key, mixed>',
    ),
    'eventutil::getlastsocketerrno' => 
    array (
      0 => 'int',
      'socket=' => 'Socket|null',
    ),
    'eventutil::getlastsocketerror' => 
    array (
      0 => 'string',
      'socket=' => 'mixed',
    ),
    'eventutil::getsocketfd' => 
    array (
      0 => 'int',
      'socket' => 'mixed',
    ),
    'eventutil::getsocketname' => 
    array (
      0 => 'bool',
      'socket' => 'mixed',
      '&w address' => 'string',
      '&w port=' => 'mixed',
    ),
    'eventutil::setsocketoption' => 
    array (
      0 => 'bool',
      'socket' => 'mixed',
      'level' => 'int',
      'optname' => 'int',
      'optval' => 'mixed',
    ),
    'eventutil::sslrandpoll' => 
    array (
      0 => 'bool',
    ),
    'evfork::__construct' => 
    array (
      0 => 'void',
      'loop' => 'EvLoop',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evfork::clear' => 
    array (
      0 => 'int',
    ),
    'evfork::createstopped' => 
    array (
      0 => 'EvFork',
      'loop' => 'EvLoop',
      'callback' => 'callable',
      'data=' => 'string',
      'priority=' => 'int',
    ),
    'evfork::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evfork::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evfork::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evfork::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evfork::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evfork::start' => 
    array (
      0 => 'void',
    ),
    'evfork::stop' => 
    array (
      0 => 'void',
    ),
    'evidle::__construct' => 
    array (
      0 => 'void',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evidle::clear' => 
    array (
      0 => 'int',
    ),
    'evidle::createstopped' => 
    array (
      0 => 'EvIdle',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evidle::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evidle::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evidle::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evidle::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evidle::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evidle::start' => 
    array (
      0 => 'void',
    ),
    'evidle::stop' => 
    array (
      0 => 'void',
    ),
    'evio::__construct' => 
    array (
      0 => 'void',
      'fd' => 'mixed',
      'events' => 'int',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evio::clear' => 
    array (
      0 => 'int',
    ),
    'evio::createstopped' => 
    array (
      0 => 'EvIo',
      'fd' => 'resource',
      'events' => 'int',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evio::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evio::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evio::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evio::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evio::set' => 
    array (
      0 => 'void',
      'fd' => 'resource',
      'events' => 'int',
    ),
    'evio::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evio::start' => 
    array (
      0 => 'void',
    ),
    'evio::stop' => 
    array (
      0 => 'void',
    ),
    'evloop::__construct' => 
    array (
      0 => 'void',
      'flags=' => 'int',
      'data=' => 'mixed',
      'io_interval=' => 'float',
      'timeout_interval=' => 'float',
    ),
    'evloop::backend' => 
    array (
      0 => 'int',
    ),
    'evloop::child' => 
    array (
      0 => 'EvChild',
      'pid' => 'int',
      'trace' => 'bool',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evloop::defaultloop' => 
    array (
      0 => 'EvLoop',
      'flags=' => 'int',
      'data=' => 'mixed',
      'io_interval=' => 'float',
      'timeout_interval=' => 'float',
    ),
    'evloop::embed' => 
    array (
      0 => 'EvEmbed',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evloop::fork' => 
    array (
      0 => 'EvFork',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evloop::idle' => 
    array (
      0 => 'EvIdle',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evloop::invokepending' => 
    array (
      0 => 'void',
    ),
    'evloop::io' => 
    array (
      0 => 'EvIo',
      'fd' => 'resource',
      'events' => 'int',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evloop::loopfork' => 
    array (
      0 => 'void',
    ),
    'evloop::now' => 
    array (
      0 => 'float',
    ),
    'evloop::nowupdate' => 
    array (
      0 => 'void',
    ),
    'evloop::periodic' => 
    array (
      0 => 'EvPeriodic',
      'offset' => 'float',
      'interval' => 'float',
      'reschedule_cb' => 'callable',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evloop::prepare' => 
    array (
      0 => 'EvPrepare',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evloop::resume' => 
    array (
      0 => 'void',
    ),
    'evloop::run' => 
    array (
      0 => 'void',
      'flags=' => 'int',
    ),
    'evloop::signal' => 
    array (
      0 => 'EvSignal',
      'signum' => 'int',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evloop::stat' => 
    array (
      0 => 'EvStat',
      'path' => 'string',
      'interval' => 'float',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evloop::stop' => 
    array (
      0 => 'void',
      'how=' => 'int',
    ),
    'evloop::suspend' => 
    array (
      0 => 'void',
    ),
    'evloop::timer' => 
    array (
      0 => 'EvTimer',
      'after' => 'float',
      'repeat' => 'float',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evloop::verify' => 
    array (
      0 => 'void',
    ),
    'evperiodic::__construct' => 
    array (
      0 => 'void',
      'offset' => 'float',
      'interval' => 'float',
      'reschedule_cb' => 'callable',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evperiodic::again' => 
    array (
      0 => 'void',
    ),
    'evperiodic::at' => 
    array (
      0 => 'float',
    ),
    'evperiodic::clear' => 
    array (
      0 => 'int',
    ),
    'evperiodic::createstopped' => 
    array (
      0 => 'EvPeriodic',
      'offset' => 'float',
      'interval' => 'float',
      'reschedule_cb' => 'callable',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evperiodic::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evperiodic::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evperiodic::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evperiodic::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evperiodic::set' => 
    array (
      0 => 'void',
      'offset' => 'float',
      'interval' => 'float',
      'reschedule_cb=' => 'mixed',
    ),
    'evperiodic::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evperiodic::start' => 
    array (
      0 => 'void',
    ),
    'evperiodic::stop' => 
    array (
      0 => 'void',
    ),
    'evprepare::__construct' => 
    array (
      0 => 'void',
      'callback' => 'string',
      'data=' => 'string',
      'priority=' => 'int',
    ),
    'evprepare::clear' => 
    array (
      0 => 'int',
    ),
    'evprepare::createstopped' => 
    array (
      0 => 'EvPrepare',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evprepare::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evprepare::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evprepare::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evprepare::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evprepare::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evprepare::start' => 
    array (
      0 => 'void',
    ),
    'evprepare::stop' => 
    array (
      0 => 'void',
    ),
    'evsignal::__construct' => 
    array (
      0 => 'void',
      'signum' => 'int',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evsignal::clear' => 
    array (
      0 => 'int',
    ),
    'evsignal::createstopped' => 
    array (
      0 => 'EvSignal',
      'signum' => 'int',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evsignal::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evsignal::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evsignal::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evsignal::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evsignal::set' => 
    array (
      0 => 'void',
      'signum' => 'int',
    ),
    'evsignal::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evsignal::start' => 
    array (
      0 => 'void',
    ),
    'evsignal::stop' => 
    array (
      0 => 'void',
    ),
    'evstat::__construct' => 
    array (
      0 => 'void',
      'path' => 'string',
      'interval' => 'float',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evstat::attr' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'evstat::clear' => 
    array (
      0 => 'int',
    ),
    'evstat::createstopped' => 
    array (
      0 => 'EvStat',
      'path' => 'string',
      'interval' => 'float',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evstat::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evstat::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evstat::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evstat::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evstat::prev' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'evstat::set' => 
    array (
      0 => 'void',
      'path' => 'string',
      'interval' => 'float',
    ),
    'evstat::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evstat::start' => 
    array (
      0 => 'void',
    ),
    'evstat::stat' => 
    array (
      0 => 'bool',
    ),
    'evstat::stop' => 
    array (
      0 => 'void',
    ),
    'evtimer::__construct' => 
    array (
      0 => 'void',
      'after' => 'float',
      'repeat' => 'float',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evtimer::again' => 
    array (
      0 => 'void',
    ),
    'evtimer::clear' => 
    array (
      0 => 'int',
    ),
    'evtimer::createstopped' => 
    array (
      0 => 'EvTimer',
      'after' => 'float',
      'repeat' => 'float',
      'callback' => 'callable',
      'data=' => 'mixed',
      'priority=' => 'int',
    ),
    'evtimer::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evtimer::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evtimer::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evtimer::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evtimer::set' => 
    array (
      0 => 'void',
      'after' => 'float',
      'repeat' => 'float',
    ),
    'evtimer::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evtimer::start' => 
    array (
      0 => 'void',
    ),
    'evtimer::stop' => 
    array (
      0 => 'void',
    ),
    'evwatcher::clear' => 
    array (
      0 => 'int',
    ),
    'evwatcher::feed' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evwatcher::getloop' => 
    array (
      0 => 'EvLoop|null',
    ),
    'evwatcher::invoke' => 
    array (
      0 => 'void',
      'revents' => 'int',
    ),
    'evwatcher::keepalive' => 
    array (
      0 => 'bool',
      'value=' => 'bool',
    ),
    'evwatcher::setcallback' => 
    array (
      0 => 'void',
      'callback' => 'callable',
    ),
    'evwatcher::start' => 
    array (
      0 => 'void',
    ),
    'evwatcher::stop' => 
    array (
      0 => 'void',
    ),
    'grpc\\call::__construct' => 
    array (
      0 => 'void',
      'channel' => 'Grpc\\Channel',
      'method' => 'string',
      'deadline' => 'Grpc\\Timeval',
      'host_override=' => 'mixed',
    ),
    'grpc\\call::getpeer' => 
    array (
      0 => 'string',
    ),
    'grpc\\call::setcredentials' => 
    array (
      0 => 'int',
      'credentials' => 'Grpc\\CallCredentials',
    ),
    'grpc\\call::startbatch' => 
    array (
      0 => 'object',
      'ops' => 'array<array-key, mixed>',
    ),
    'grpc\\callcredentials::createcomposite' => 
    array (
      0 => 'Grpc\\CallCredentials',
      'creds1' => 'Grpc\\CallCredentials',
      'creds2' => 'Grpc\\CallCredentials',
    ),
    'grpc\\callcredentials::createfromplugin' => 
    array (
      0 => 'Grpc\\CallCredentials',
      'callback' => 'Closure',
    ),
    'grpc\\channel::__construct' => 
    array (
      0 => 'void',
      'target' => 'string',
      'args' => 'array<array-key, mixed>',
    ),
    'grpc\\channel::getconnectivitystate' => 
    array (
      0 => 'int',
      'try_to_connect=' => 'bool',
    ),
    'grpc\\channel::gettarget' => 
    array (
      0 => 'string',
    ),
    'grpc\\channel::watchconnectivitystate' => 
    array (
      0 => 'bool',
      'last_state' => 'int',
      'deadline' => 'Grpc\\Timeval',
    ),
    'grpc\\channelcredentials::createcomposite' => 
    array (
      0 => 'Grpc\\ChannelCredentials',
      'channel_creds' => 'Grpc\\ChannelCredentials',
      'call_creds' => 'Grpc\\CallCredentials',
    ),
    'grpc\\channelcredentials::createdefault' => 
    array (
      0 => 'Grpc\\ChannelCredentials',
    ),
    'grpc\\channelcredentials::createinsecure' => 
    array (
      0 => 'null',
    ),
    'grpc\\channelcredentials::createssl' => 
    array (
      0 => 'Grpc\\ChannelCredentials',
      'pem_root_certs=' => 'string',
      'pem_private_key=' => 'string',
      'pem_cert_chain=' => 'string',
    ),
    'grpc\\channelcredentials::setdefaultrootspem' => 
    array (
      0 => 'mixed',
      'pem_roots' => 'string',
    ),
    'grpc\\server::__construct' => 
    array (
      0 => 'void',
      'args=' => 'array<array-key, mixed>',
    ),
    'grpc\\server::addhttp2port' => 
    array (
      0 => 'bool',
      'addr' => 'string',
    ),
    'grpc\\server::addsecurehttp2port' => 
    array (
      0 => 'bool',
      'addr' => 'string',
      'server_creds' => 'Grpc\\ServerCredentials',
    ),
    'grpc\\servercredentials::createssl' => 
    array (
      0 => 'object',
      'pem_root_certs' => 'string',
      'pem_private_key' => 'string',
      'pem_cert_chain' => 'string',
    ),
    'grpc\\timeval::__construct' => 
    array (
      0 => 'void',
      'microseconds' => 'int',
    ),
    'grpc\\timeval::add' => 
    array (
      0 => 'Grpc\\Timeval',
      'timeval' => 'Grpc\\Timeval',
    ),
    'grpc\\timeval::compare' => 
    array (
      0 => 'int',
      'a_timeval' => 'Grpc\\Timeval',
      'b_timeval' => 'Grpc\\Timeval',
    ),
    'grpc\\timeval::inffuture' => 
    array (
      0 => 'Grpc\\Timeval',
    ),
    'grpc\\timeval::infpast' => 
    array (
      0 => 'Grpc\\Timeval',
    ),
    'grpc\\timeval::now' => 
    array (
      0 => 'Grpc\\Timeval',
    ),
    'grpc\\timeval::similar' => 
    array (
      0 => 'bool',
      'a_timeval' => 'Grpc\\Timeval',
      'b_timeval' => 'Grpc\\Timeval',
      'threshold_timeval' => 'Grpc\\Timeval',
    ),
    'grpc\\timeval::subtract' => 
    array (
      0 => 'Grpc\\Timeval',
      'timeval' => 'Grpc\\Timeval',
    ),
    'grpc\\timeval::zero' => 
    array (
      0 => 'Grpc\\Timeval',
    ),
    'igbinary_serialize' => 
    array (
      0 => 'false|string',
      'value' => 'mixed',
    ),
    'igbinary_unserialize' => 
    array (
      0 => 'mixed',
      'str' => 'string',
    ),
    'imagecreatefromxpm' => 
    array (
      0 => 'GdImage|false',
      'filename' => 'string',
    ),
    'imagick::__construct' => 
    array (
      0 => 'void',
      'files=' => 'array<array-key, string>|null|string',
    ),
    'imagick::__tostring' => 
    array (
      0 => 'string',
    ),
    'imagick::adaptiveblurimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'sigma' => 'float',
      'channel=' => 'int',
    ),
    'imagick::adaptiveresizeimage' => 
    array (
      0 => 'bool',
      'columns' => 'int',
      'rows' => 'int',
      'bestfit=' => 'bool',
      'legacy=' => 'bool',
    ),
    'imagick::adaptivesharpenimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'sigma' => 'float',
      'channel=' => 'int',
    ),
    'imagick::adaptivethresholdimage' => 
    array (
      0 => 'bool',
      'width' => 'int',
      'height' => 'int',
      'offset' => 'int',
    ),
    'imagick::addimage' => 
    array (
      0 => 'bool',
      'image' => 'Imagick',
    ),
    'imagick::addnoiseimage' => 
    array (
      0 => 'bool',
      'noise' => 'int',
      'channel=' => 'int',
    ),
    'imagick::affinetransformimage' => 
    array (
      0 => 'bool',
      'settings' => 'ImagickDraw',
    ),
    'imagick::animateimages' => 
    array (
      0 => 'bool',
      'x_server' => 'string',
    ),
    'imagick::annotateimage' => 
    array (
      0 => 'bool',
      'settings' => 'ImagickDraw',
      'x' => 'float',
      'y' => 'float',
      'angle' => 'float',
      'text' => 'string',
    ),
    'imagick::appendimages' => 
    array (
      0 => 'Imagick',
      'stack' => 'bool',
    ),
    'imagick::autogammaimage' => 
    array (
      0 => 'void',
      'channel=' => 'int|null',
    ),
    'imagick::autolevelimage' => 
    array (
      0 => 'bool',
      'channel=' => 'int',
    ),
    'imagick::autoorient' => 
    array (
      0 => 'void',
    ),
    'imagick::averageimages' => 
    array (
      0 => 'Imagick',
    ),
    'imagick::blackthresholdimage' => 
    array (
      0 => 'bool',
      'threshold_color' => 'ImagickPixel|string',
    ),
    'imagick::blueshiftimage' => 
    array (
      0 => 'bool',
      'factor=' => 'float',
    ),
    'imagick::blurimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'sigma' => 'float',
      'channel=' => 'int',
    ),
    'imagick::borderimage' => 
    array (
      0 => 'bool',
      'border_color' => 'ImagickPixel|string',
      'width' => 'int',
      'height' => 'int',
    ),
    'imagick::brightnesscontrastimage' => 
    array (
      0 => 'bool',
      'brightness' => 'float',
      'contrast' => 'float',
      'channel=' => 'int',
    ),
    'imagick::charcoalimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'sigma' => 'float',
    ),
    'imagick::chopimage' => 
    array (
      0 => 'bool',
      'width' => 'int',
      'height' => 'int',
      'x' => 'int',
      'y' => 'int',
    ),
    'imagick::clampimage' => 
    array (
      0 => 'bool',
      'channel=' => 'int',
    ),
    'imagick::clear' => 
    array (
      0 => 'bool',
    ),
    'imagick::clipimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::clipimagepath' => 
    array (
      0 => 'void',
      'pathname' => 'string',
      'inside' => 'bool',
    ),
    'imagick::clippathimage' => 
    array (
      0 => 'bool',
      'pathname' => 'string',
      'inside' => 'bool',
    ),
    'imagick::clone' => 
    array (
      0 => 'Imagick',
    ),
    'imagick::clutimage' => 
    array (
      0 => 'bool',
      'lookup_table' => 'Imagick',
      'channel=' => 'int',
    ),
    'imagick::coalesceimages' => 
    array (
      0 => 'Imagick',
    ),
    'imagick::colorizeimage' => 
    array (
      0 => 'bool',
      'colorize_color' => 'ImagickPixel|string',
      'opacity_color' => 'ImagickPixel|false|string',
      'legacy=' => 'bool|null',
    ),
    'imagick::colormatriximage' => 
    array (
      0 => 'bool',
      'color_matrix' => 'array<array-key, mixed>',
    ),
    'imagick::combineimages' => 
    array (
      0 => 'Imagick',
      'colorspace' => 'int',
    ),
    'imagick::commentimage' => 
    array (
      0 => 'bool',
      'comment' => 'string',
    ),
    'imagick::compareimagechannels' => 
    array (
      0 => 'list{Imagick, float}',
      'reference' => 'Imagick',
      'channel' => 'int',
      'metric' => 'int',
    ),
    'imagick::compareimagelayers' => 
    array (
      0 => 'Imagick',
      'metric' => 'int',
    ),
    'imagick::compareimages' => 
    array (
      0 => 'list{Imagick, float}',
      'reference' => 'Imagick',
      'metric' => 'int',
    ),
    'imagick::compositeimage' => 
    array (
      0 => 'bool',
      'composite_image' => 'Imagick',
      'composite' => 'int',
      'x' => 'int',
      'y' => 'int',
      'channel=' => 'int',
    ),
    'imagick::compositeimagegravity' => 
    array (
      0 => 'bool',
      'image' => 'Imagick',
      'composite_constant' => 'int',
      'gravity' => 'int',
    ),
    'imagick::contrastimage' => 
    array (
      0 => 'bool',
      'sharpen' => 'bool',
    ),
    'imagick::contraststretchimage' => 
    array (
      0 => 'bool',
      'black_point' => 'float',
      'white_point' => 'float',
      'channel=' => 'int',
    ),
    'imagick::convolveimage' => 
    array (
      0 => 'bool',
      'kernel' => 'ImagickKernel',
      'channel=' => 'int',
    ),
    'imagick::count' => 
    array (
      0 => 'int',
      'mode=' => 'int',
    ),
    'imagick::cropimage' => 
    array (
      0 => 'bool',
      'width' => 'int',
      'height' => 'int',
      'x' => 'int',
      'y' => 'int',
    ),
    'imagick::cropthumbnailimage' => 
    array (
      0 => 'bool',
      'width' => 'int',
      'height' => 'int',
      'legacy=' => 'bool',
    ),
    'imagick::current' => 
    array (
      0 => 'Imagick',
    ),
    'imagick::cyclecolormapimage' => 
    array (
      0 => 'bool',
      'displace' => 'int',
    ),
    'imagick::decipherimage' => 
    array (
      0 => 'bool',
      'passphrase' => 'string',
    ),
    'imagick::deconstructimages' => 
    array (
      0 => 'Imagick',
    ),
    'imagick::deleteimageartifact' => 
    array (
      0 => 'bool',
      'artifact' => 'string',
    ),
    'imagick::deleteimageproperty' => 
    array (
      0 => 'bool',
      'name' => 'string',
    ),
    'imagick::deskewimage' => 
    array (
      0 => 'bool',
      'threshold' => 'float',
    ),
    'imagick::despeckleimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::destroy' => 
    array (
      0 => 'bool',
    ),
    'imagick::displayimage' => 
    array (
      0 => 'bool',
      'servername' => 'string',
    ),
    'imagick::displayimages' => 
    array (
      0 => 'bool',
      'servername' => 'string',
    ),
    'imagick::distortimage' => 
    array (
      0 => 'bool',
      'distortion' => 'int',
      'arguments' => 'array<array-key, mixed>',
      'bestfit' => 'bool',
    ),
    'imagick::drawimage' => 
    array (
      0 => 'bool',
      'drawing' => 'ImagickDraw',
    ),
    'imagick::edgeimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
    ),
    'imagick::embossimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'sigma' => 'float',
    ),
    'imagick::encipherimage' => 
    array (
      0 => 'bool',
      'passphrase' => 'string',
    ),
    'imagick::enhanceimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::equalizeimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::evaluateimage' => 
    array (
      0 => 'bool',
      'evaluate' => 'int',
      'constant' => 'float',
      'channel=' => 'int',
    ),
    'imagick::evaluateimages' => 
    array (
      0 => 'Imagick',
      'evaluate' => 'int',
    ),
    'imagick::exportimagepixels' => 
    array (
      0 => 'list<int>',
      'x' => 'int',
      'y' => 'int',
      'width' => 'int',
      'height' => 'int',
      'map' => 'string',
      'pixelstorage' => 'int',
    ),
    'imagick::extentimage' => 
    array (
      0 => 'bool',
      'width' => 'int',
      'height' => 'int',
      'x' => 'int',
      'y' => 'int',
    ),
    'imagick::flattenimages' => 
    array (
      0 => 'Imagick',
    ),
    'imagick::flipimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::floodfillpaintimage' => 
    array (
      0 => 'bool',
      'fill_color' => 'ImagickPixel|string',
      'fuzz' => 'float',
      'border_color' => 'ImagickPixel|string',
      'x' => 'int',
      'y' => 'int',
      'invert' => 'bool',
      'channel=' => 'int|null',
    ),
    'imagick::flopimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::forwardfouriertransformimage' => 
    array (
      0 => 'bool',
      'magnitude' => 'bool',
    ),
    'imagick::frameimage' => 
    array (
      0 => 'bool',
      'matte_color' => 'ImagickPixel|string',
      'width' => 'int',
      'height' => 'int',
      'inner_bevel' => 'int',
      'outer_bevel' => 'int',
    ),
    'imagick::functionimage' => 
    array (
      0 => 'bool',
      'function' => 'int',
      'parameters' => 'array<array-key, mixed>',
      'channel=' => 'int',
    ),
    'imagick::fximage' => 
    array (
      0 => 'Imagick',
      'expression' => 'string',
      'channel=' => 'int',
    ),
    'imagick::gammaimage' => 
    array (
      0 => 'bool',
      'gamma' => 'float',
      'channel=' => 'int',
    ),
    'imagick::gaussianblurimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'sigma' => 'float',
      'channel=' => 'int',
    ),
    'imagick::getcolorspace' => 
    array (
      0 => 'int',
    ),
    'imagick::getcompression' => 
    array (
      0 => 'int',
    ),
    'imagick::getcompressionquality' => 
    array (
      0 => 'int',
    ),
    'imagick::getconfigureoptions' => 
    array (
      0 => 'array<array-key, mixed>',
      'pattern=' => 'string',
    ),
    'imagick::getcopyright' => 
    array (
      0 => 'string',
    ),
    'imagick::getfeatures' => 
    array (
      0 => 'string',
    ),
    'imagick::getfilename' => 
    array (
      0 => 'string',
    ),
    'imagick::getfont' => 
    array (
      0 => 'string',
    ),
    'imagick::getformat' => 
    array (
      0 => 'string',
    ),
    'imagick::getgravity' => 
    array (
      0 => 'int',
    ),
    'imagick::gethdrienabled' => 
    array (
      0 => 'bool',
    ),
    'imagick::gethomeurl' => 
    array (
      0 => 'string',
    ),
    'imagick::getimage' => 
    array (
      0 => 'Imagick',
    ),
    'imagick::getimagealphachannel' => 
    array (
      0 => 'bool',
    ),
    'imagick::getimageartifact' => 
    array (
      0 => 'null|string',
      'artifact' => 'string',
    ),
    'imagick::getimagebackgroundcolor' => 
    array (
      0 => 'ImagickPixel',
    ),
    'imagick::getimageblob' => 
    array (
      0 => 'string',
    ),
    'imagick::getimageblueprimary' => 
    array (
      0 => 'array{x: float, y: float}',
    ),
    'imagick::getimagebordercolor' => 
    array (
      0 => 'ImagickPixel',
    ),
    'imagick::getimagechanneldepth' => 
    array (
      0 => 'int',
      'channel' => 'int',
    ),
    'imagick::getimagechanneldistortion' => 
    array (
      0 => 'float',
      'reference' => 'Imagick',
      'channel' => 'int',
      'metric' => 'int',
    ),
    'imagick::getimagechanneldistortions' => 
    array (
      0 => 'float',
      'reference_image' => 'Imagick',
      'metric' => 'int',
      'channel=' => 'int',
    ),
    'imagick::getimagechannelkurtosis' => 
    array (
      0 => 'array{kurtosis: float, skewness: float}',
      'channel=' => 'int',
    ),
    'imagick::getimagechannelmean' => 
    array (
      0 => 'array{mean: float, standardDeviation: float}',
      'channel' => 'int',
    ),
    'imagick::getimagechannelrange' => 
    array (
      0 => 'array{maxima: float, minima: float}',
      'channel' => 'int',
    ),
    'imagick::getimagechannelstatistics' => 
    array (
      0 => 'array<int, array{depth: int, maxima: float, mean: float, minima: float, standardDeviation: float}>',
    ),
    'imagick::getimagecolormapcolor' => 
    array (
      0 => 'ImagickPixel',
      'index' => 'int',
    ),
    'imagick::getimagecolors' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagecolorspace' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagecompose' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagecompression' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagecompressionquality' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagedelay' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagedepth' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagedispose' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagedistortion' => 
    array (
      0 => 'float',
      'reference' => 'Imagick',
      'metric' => 'int',
    ),
    'imagick::getimagefilename' => 
    array (
      0 => 'string',
    ),
    'imagick::getimageformat' => 
    array (
      0 => 'string',
    ),
    'imagick::getimagegamma' => 
    array (
      0 => 'float',
    ),
    'imagick::getimagegeometry' => 
    array (
      0 => 'array{height: int, width: int}',
    ),
    'imagick::getimagegravity' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagegreenprimary' => 
    array (
      0 => 'array{x: float, y: float}',
    ),
    'imagick::getimageheight' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagehistogram' => 
    array (
      0 => 'list<ImagickPixel>',
    ),
    'imagick::getimageindex' => 
    array (
      0 => 'int',
    ),
    'imagick::getimageinterlacescheme' => 
    array (
      0 => 'int',
    ),
    'imagick::getimageinterpolatemethod' => 
    array (
      0 => 'int',
    ),
    'imagick::getimageiterations' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagelength' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagemimetype' => 
    array (
      0 => 'string',
    ),
    'imagick::getimageorientation' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagepage' => 
    array (
      0 => 'array{height: int, width: int, x: int, y: int}',
    ),
    'imagick::getimagepixelcolor' => 
    array (
      0 => 'ImagickPixel',
      'x' => 'int',
      'y' => 'int',
    ),
    'imagick::getimageprofile' => 
    array (
      0 => 'string',
      'name' => 'string',
    ),
    'imagick::getimageprofiles' => 
    array (
      0 => 'array<array-key, mixed>',
      'pattern=' => 'string',
      'include_values=' => 'bool',
    ),
    'imagick::getimageproperties' => 
    array (
      0 => 'array<int|string, string>',
      'pattern=' => 'string',
      'include_values=' => 'bool',
    ),
    'imagick::getimageproperty' => 
    array (
      0 => 'string',
      'name' => 'string',
    ),
    'imagick::getimageredprimary' => 
    array (
      0 => 'array{x: float, y: float}',
    ),
    'imagick::getimageregion' => 
    array (
      0 => 'Imagick',
      'width' => 'int',
      'height' => 'int',
      'x' => 'int',
      'y' => 'int',
    ),
    'imagick::getimagerenderingintent' => 
    array (
      0 => 'int',
    ),
    'imagick::getimageresolution' => 
    array (
      0 => 'array{x: float, y: float}',
    ),
    'imagick::getimagesblob' => 
    array (
      0 => 'string',
    ),
    'imagick::getimagescene' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagesignature' => 
    array (
      0 => 'string',
    ),
    'imagick::getimagesize' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagetickspersecond' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagetotalinkdensity' => 
    array (
      0 => 'float',
    ),
    'imagick::getimagetype' => 
    array (
      0 => 'int',
    ),
    'imagick::getimageunits' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagevirtualpixelmethod' => 
    array (
      0 => 'int',
    ),
    'imagick::getimagewhitepoint' => 
    array (
      0 => 'array{x: float, y: float}',
    ),
    'imagick::getimagewidth' => 
    array (
      0 => 'int',
    ),
    'imagick::getinterlacescheme' => 
    array (
      0 => 'int',
    ),
    'imagick::getiteratorindex' => 
    array (
      0 => 'int',
    ),
    'imagick::getnumberimages' => 
    array (
      0 => 'int',
    ),
    'imagick::getoption' => 
    array (
      0 => 'string',
      'key' => 'string',
    ),
    'imagick::getpackagename' => 
    array (
      0 => 'string',
    ),
    'imagick::getpage' => 
    array (
      0 => 'array{height: int, width: int, x: int, y: int}',
    ),
    'imagick::getpixeliterator' => 
    array (
      0 => 'ImagickPixelIterator',
    ),
    'imagick::getpixelregioniterator' => 
    array (
      0 => 'ImagickPixelIterator',
      'x' => 'int',
      'y' => 'int',
      'columns' => 'int',
      'rows' => 'int',
    ),
    'imagick::getpointsize' => 
    array (
      0 => 'float',
    ),
    'imagick::getquantum' => 
    array (
      0 => 'int',
    ),
    'imagick::getquantumdepth' => 
    array (
      0 => 'array{quantumDepthLong: int, quantumDepthString: string}',
    ),
    'imagick::getquantumrange' => 
    array (
      0 => 'array{quantumRangeLong: int, quantumRangeString: string}',
    ),
    'imagick::getregistry' => 
    array (
      0 => 'false|string',
      'key' => 'string',
    ),
    'imagick::getreleasedate' => 
    array (
      0 => 'string',
    ),
    'imagick::getresource' => 
    array (
      0 => 'int',
      'type' => 'int',
    ),
    'imagick::getresourcelimit' => 
    array (
      0 => 'float',
      'type' => 'int',
    ),
    'imagick::getsamplingfactors' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'imagick::getsize' => 
    array (
      0 => 'array{columns: int, rows: int}',
    ),
    'imagick::getsizeoffset' => 
    array (
      0 => 'int',
    ),
    'imagick::getversion' => 
    array (
      0 => 'array{versionNumber: int, versionString: string}',
    ),
    'imagick::haldclutimage' => 
    array (
      0 => 'bool',
      'clut' => 'Imagick',
      'channel=' => 'int',
    ),
    'imagick::hasnextimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::haspreviousimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::identifyformat' => 
    array (
      0 => 'string',
      'format' => 'string',
    ),
    'imagick::identifyimage' => 
    array (
      0 => 'array<string, mixed>',
      'append_raw_output=' => 'bool',
    ),
    'imagick::identifyimagetype' => 
    array (
      0 => 'int',
    ),
    'imagick::implodeimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
    ),
    'imagick::importimagepixels' => 
    array (
      0 => 'bool',
      'x' => 'int',
      'y' => 'int',
      'width' => 'int',
      'height' => 'int',
      'map' => 'string',
      'pixelstorage' => 'int',
      'pixels' => 'list<int>',
    ),
    'imagick::inversefouriertransformimage' => 
    array (
      0 => 'bool',
      'complement' => 'Imagick',
      'magnitude' => 'bool',
    ),
    'imagick::key' => 
    array (
      0 => 'int',
    ),
    'imagick::labelimage' => 
    array (
      0 => 'bool',
      'label' => 'string',
    ),
    'imagick::levelimage' => 
    array (
      0 => 'bool',
      'black_point' => 'float',
      'gamma' => 'float',
      'white_point' => 'float',
      'channel=' => 'int',
    ),
    'imagick::linearstretchimage' => 
    array (
      0 => 'bool',
      'black_point' => 'float',
      'white_point' => 'float',
    ),
    'imagick::liquidrescaleimage' => 
    array (
      0 => 'bool',
      'width' => 'int',
      'height' => 'int',
      'delta_x' => 'float',
      'rigidity' => 'float',
    ),
    'imagick::listregistry' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'imagick::localcontrastimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'strength' => 'float',
    ),
    'imagick::magnifyimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::mergeimagelayers' => 
    array (
      0 => 'Imagick',
      'layermethod' => 'int',
    ),
    'imagick::minifyimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::modulateimage' => 
    array (
      0 => 'bool',
      'brightness' => 'float',
      'saturation' => 'float',
      'hue' => 'float',
    ),
    'imagick::montageimage' => 
    array (
      0 => 'Imagick',
      'settings' => 'ImagickDraw',
      'tile_geometry' => 'string',
      'thumbnail_geometry' => 'string',
      'monatgemode' => 'int',
      'frame' => 'string',
    ),
    'imagick::morphimages' => 
    array (
      0 => 'Imagick',
      'number_frames' => 'int',
    ),
    'imagick::morphology' => 
    array (
      0 => 'bool',
      'morphology' => 'int',
      'iterations' => 'int',
      'kernel' => 'ImagickKernel',
      'channel=' => 'int',
    ),
    'imagick::motionblurimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'sigma' => 'float',
      'angle' => 'float',
      'channel=' => 'int',
    ),
    'imagick::negateimage' => 
    array (
      0 => 'bool',
      'gray' => 'bool',
      'channel=' => 'int',
    ),
    'imagick::newimage' => 
    array (
      0 => 'bool',
      'columns' => 'int',
      'rows' => 'int',
      'background_color' => 'ImagickPixel|string',
      'format=' => 'null|string',
    ),
    'imagick::newpseudoimage' => 
    array (
      0 => 'bool',
      'columns' => 'int',
      'rows' => 'int',
      'pseudo_format' => 'string',
    ),
    'imagick::next' => 
    array (
      0 => 'void',
    ),
    'imagick::nextimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::normalizeimage' => 
    array (
      0 => 'bool',
      'channel=' => 'int',
    ),
    'imagick::oilpaintimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
    ),
    'imagick::opaquepaintimage' => 
    array (
      0 => 'bool',
      'target_color' => 'ImagickPixel|string',
      'fill_color' => 'ImagickPixel|string',
      'fuzz' => 'float',
      'invert' => 'bool',
      'channel=' => 'int',
    ),
    'imagick::optimizeimagelayers' => 
    array (
      0 => 'Imagick',
    ),
    'imagick::pingimage' => 
    array (
      0 => 'bool',
      'filename' => 'string',
    ),
    'imagick::pingimageblob' => 
    array (
      0 => 'bool',
      'image' => 'string',
    ),
    'imagick::pingimagefile' => 
    array (
      0 => 'bool',
      'filehandle' => 'resource',
      'filename=' => 'null|string',
    ),
    'imagick::polaroidimage' => 
    array (
      0 => 'bool',
      'settings' => 'ImagickDraw',
      'angle' => 'float',
    ),
    'imagick::posterizeimage' => 
    array (
      0 => 'bool',
      'levels' => 'int',
      'dither' => 'bool',
    ),
    'imagick::previewimages' => 
    array (
      0 => 'bool',
      'preview' => 'int',
    ),
    'imagick::previousimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::profileimage' => 
    array (
      0 => 'bool',
      'name' => 'string',
      'profile' => 'null|string',
    ),
    'imagick::quantizeimage' => 
    array (
      0 => 'bool',
      'number_colors' => 'int',
      'colorspace' => 'int',
      'tree_depth' => 'int',
      'dither' => 'bool',
      'measure_error' => 'bool',
    ),
    'imagick::quantizeimages' => 
    array (
      0 => 'bool',
      'number_colors' => 'int',
      'colorspace' => 'int',
      'tree_depth' => 'int',
      'dither' => 'bool',
      'measure_error' => 'bool',
    ),
    'imagick::queryfontmetrics' => 
    array (
      0 => 'array<array-key, mixed>',
      'settings' => 'ImagickDraw',
      'text' => 'string',
      'multiline=' => 'bool|null',
    ),
    'imagick::queryfonts' => 
    array (
      0 => 'array<array-key, mixed>',
      'pattern=' => 'string',
    ),
    'imagick::queryformats' => 
    array (
      0 => 'list<string>',
      'pattern=' => 'string',
    ),
    'imagick::raiseimage' => 
    array (
      0 => 'bool',
      'width' => 'int',
      'height' => 'int',
      'x' => 'int',
      'y' => 'int',
      'raise' => 'bool',
    ),
    'imagick::randomthresholdimage' => 
    array (
      0 => 'bool',
      'low' => 'float',
      'high' => 'float',
      'channel=' => 'int',
    ),
    'imagick::readimage' => 
    array (
      0 => 'bool',
      'filename' => 'string',
    ),
    'imagick::readimageblob' => 
    array (
      0 => 'bool',
      'image' => 'string',
      'filename=' => 'null|string',
    ),
    'imagick::readimagefile' => 
    array (
      0 => 'bool',
      'filehandle' => 'resource',
      'filename=' => 'null|string',
    ),
    'imagick::readimages' => 
    array (
      0 => 'bool',
      'filenames' => 'array<array-key, mixed>',
    ),
    'imagick::remapimage' => 
    array (
      0 => 'bool',
      'replacement' => 'Imagick',
      'dither_method' => 'int',
    ),
    'imagick::removeimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::removeimageprofile' => 
    array (
      0 => 'string',
      'name' => 'string',
    ),
    'imagick::resampleimage' => 
    array (
      0 => 'bool',
      'x_resolution' => 'float',
      'y_resolution' => 'float',
      'filter' => 'int',
      'blur' => 'float',
    ),
    'imagick::resetimagepage' => 
    array (
      0 => 'bool',
      'page' => 'string',
    ),
    'imagick::resizeimage' => 
    array (
      0 => 'bool',
      'columns' => 'int',
      'rows' => 'int',
      'filter' => 'int',
      'blur' => 'float',
      'bestfit=' => 'bool',
      'legacy=' => 'bool',
    ),
    'imagick::rewind' => 
    array (
      0 => 'void',
    ),
    'imagick::rollimage' => 
    array (
      0 => 'bool',
      'x' => 'int',
      'y' => 'int',
    ),
    'imagick::rotateimage' => 
    array (
      0 => 'bool',
      'background_color' => 'ImagickPixel|string',
      'degrees' => 'float',
    ),
    'imagick::rotationalblurimage' => 
    array (
      0 => 'bool',
      'angle' => 'float',
      'channel=' => 'int',
    ),
    'imagick::roundcorners' => 
    array (
      0 => 'bool',
      'x_rounding' => 'float',
      'y_rounding' => 'float',
      'stroke_width=' => 'float',
      'displace=' => 'float',
      'size_correction=' => 'float',
    ),
    'imagick::sampleimage' => 
    array (
      0 => 'bool',
      'columns' => 'int',
      'rows' => 'int',
    ),
    'imagick::scaleimage' => 
    array (
      0 => 'bool',
      'columns' => 'int',
      'rows' => 'int',
      'bestfit=' => 'bool',
      'legacy=' => 'bool',
    ),
    'imagick::segmentimage' => 
    array (
      0 => 'bool',
      'colorspace' => 'int',
      'cluster_threshold' => 'float',
      'smooth_threshold' => 'float',
      'verbose=' => 'bool',
    ),
    'imagick::selectiveblurimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'sigma' => 'float',
      'threshold' => 'float',
      'channel=' => 'int',
    ),
    'imagick::separateimagechannel' => 
    array (
      0 => 'bool',
      'channel' => 'int',
    ),
    'imagick::sepiatoneimage' => 
    array (
      0 => 'bool',
      'threshold' => 'float',
    ),
    'imagick::setantialias' => 
    array (
      0 => 'void',
      'antialias' => 'bool',
    ),
    'imagick::setbackgroundcolor' => 
    array (
      0 => 'bool',
      'background_color' => 'ImagickPixel|string',
    ),
    'imagick::setcolorspace' => 
    array (
      0 => 'bool',
      'colorspace' => 'int',
    ),
    'imagick::setcompression' => 
    array (
      0 => 'bool',
      'compression' => 'int',
    ),
    'imagick::setcompressionquality' => 
    array (
      0 => 'bool',
      'quality' => 'int',
    ),
    'imagick::setfilename' => 
    array (
      0 => 'bool',
      'filename' => 'string',
    ),
    'imagick::setfirstiterator' => 
    array (
      0 => 'bool',
    ),
    'imagick::setfont' => 
    array (
      0 => 'bool',
      'font' => 'string',
    ),
    'imagick::setformat' => 
    array (
      0 => 'bool',
      'format' => 'string',
    ),
    'imagick::setgravity' => 
    array (
      0 => 'bool',
      'gravity' => 'int',
    ),
    'imagick::setimage' => 
    array (
      0 => 'bool',
      'image' => 'Imagick',
    ),
    'imagick::setimagealpha' => 
    array (
      0 => 'bool',
      'alpha' => 'float',
    ),
    'imagick::setimagealphachannel' => 
    array (
      0 => 'bool',
      'alphachannel' => 'int',
    ),
    'imagick::setimageartifact' => 
    array (
      0 => 'bool',
      'artifact' => 'string',
      'value' => 'null|string',
    ),
    'imagick::setimagebackgroundcolor' => 
    array (
      0 => 'bool',
      'background_color' => 'ImagickPixel|string',
    ),
    'imagick::setimageblueprimary' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
      'z' => 'float',
    ),
    'imagick::setimagebordercolor' => 
    array (
      0 => 'bool',
      'border_color' => 'ImagickPixel|string',
    ),
    'imagick::setimagechanneldepth' => 
    array (
      0 => 'bool',
      'channel' => 'int',
      'depth' => 'int',
    ),
    'imagick::setimagechannelmask' => 
    array (
      0 => 'int',
      'channel' => 'int',
    ),
    'imagick::setimagecolormapcolor' => 
    array (
      0 => 'bool',
      'index' => 'int',
      'color' => 'ImagickPixel',
    ),
    'imagick::setimagecolorspace' => 
    array (
      0 => 'bool',
      'colorspace' => 'int',
    ),
    'imagick::setimagecompose' => 
    array (
      0 => 'bool',
      'compose' => 'int',
    ),
    'imagick::setimagecompression' => 
    array (
      0 => 'bool',
      'compression' => 'int',
    ),
    'imagick::setimagecompressionquality' => 
    array (
      0 => 'bool',
      'quality' => 'int',
    ),
    'imagick::setimagedelay' => 
    array (
      0 => 'bool',
      'delay' => 'int',
    ),
    'imagick::setimagedepth' => 
    array (
      0 => 'bool',
      'depth' => 'int',
    ),
    'imagick::setimagedispose' => 
    array (
      0 => 'bool',
      'dispose' => 'int',
    ),
    'imagick::setimageextent' => 
    array (
      0 => 'bool',
      'columns' => 'int',
      'rows' => 'int',
    ),
    'imagick::setimagefilename' => 
    array (
      0 => 'bool',
      'filename' => 'string',
    ),
    'imagick::setimageformat' => 
    array (
      0 => 'bool',
      'format' => 'string',
    ),
    'imagick::setimagegamma' => 
    array (
      0 => 'bool',
      'gamma' => 'float',
    ),
    'imagick::setimagegravity' => 
    array (
      0 => 'bool',
      'gravity' => 'int',
    ),
    'imagick::setimagegreenprimary' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
      'z' => 'float',
    ),
    'imagick::setimageindex' => 
    array (
      0 => 'bool',
      'index' => 'int',
    ),
    'imagick::setimageinterlacescheme' => 
    array (
      0 => 'bool',
      'interlace' => 'int',
    ),
    'imagick::setimageinterpolatemethod' => 
    array (
      0 => 'bool',
      'method' => 'int',
    ),
    'imagick::setimageiterations' => 
    array (
      0 => 'bool',
      'iterations' => 'int',
    ),
    'imagick::setimagematte' => 
    array (
      0 => 'bool',
      'matte' => 'bool',
    ),
    'imagick::setimagemattecolor' => 
    array (
      0 => 'bool',
      'matte_color' => 'ImagickPixel|string',
    ),
    'imagick::setimageorientation' => 
    array (
      0 => 'bool',
      'orientation' => 'int',
    ),
    'imagick::setimagepage' => 
    array (
      0 => 'bool',
      'width' => 'int',
      'height' => 'int',
      'x' => 'int',
      'y' => 'int',
    ),
    'imagick::setimageprofile' => 
    array (
      0 => 'bool',
      'name' => 'string',
      'profile' => 'string',
    ),
    'imagick::setimageproperty' => 
    array (
      0 => 'bool',
      'name' => 'string',
      'value' => 'string',
    ),
    'imagick::setimageredprimary' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
      'z' => 'float',
    ),
    'imagick::setimagerenderingintent' => 
    array (
      0 => 'bool',
      'rendering_intent' => 'int',
    ),
    'imagick::setimageresolution' => 
    array (
      0 => 'bool',
      'x_resolution' => 'float',
      'y_resolution' => 'float',
    ),
    'imagick::setimagescene' => 
    array (
      0 => 'bool',
      'scene' => 'int',
    ),
    'imagick::setimagetickspersecond' => 
    array (
      0 => 'bool',
      'ticks_per_second' => 'int',
    ),
    'imagick::setimagetype' => 
    array (
      0 => 'bool',
      'image_type' => 'int',
    ),
    'imagick::setimageunits' => 
    array (
      0 => 'bool',
      'units' => 'int',
    ),
    'imagick::setimagevirtualpixelmethod' => 
    array (
      0 => 'bool',
      'method' => 'int',
    ),
    'imagick::setimagewhitepoint' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
      'z' => 'float',
    ),
    'imagick::setinterlacescheme' => 
    array (
      0 => 'bool',
      'interlace' => 'int',
    ),
    'imagick::setiteratorindex' => 
    array (
      0 => 'bool',
      'index' => 'int',
    ),
    'imagick::setlastiterator' => 
    array (
      0 => 'bool',
    ),
    'imagick::setoption' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'string',
    ),
    'imagick::setpage' => 
    array (
      0 => 'bool',
      'width' => 'int',
      'height' => 'int',
      'x' => 'int',
      'y' => 'int',
    ),
    'imagick::setpointsize' => 
    array (
      0 => 'bool',
      'point_size' => 'float',
    ),
    'imagick::setprogressmonitor' => 
    array (
      0 => 'bool',
      'callback' => 'callable',
    ),
    'imagick::setregistry' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'string',
    ),
    'imagick::setresolution' => 
    array (
      0 => 'bool',
      'x_resolution' => 'float',
      'y_resolution' => 'float',
    ),
    'imagick::setresourcelimit' => 
    array (
      0 => 'bool',
      'type' => 'int',
      'limit' => 'int',
    ),
    'imagick::setsamplingfactors' => 
    array (
      0 => 'bool',
      'factors' => 'list<string>',
    ),
    'imagick::setsize' => 
    array (
      0 => 'bool',
      'columns' => 'int',
      'rows' => 'int',
    ),
    'imagick::setsizeoffset' => 
    array (
      0 => 'bool',
      'columns' => 'int',
      'rows' => 'int',
      'offset' => 'int',
    ),
    'imagick::settype' => 
    array (
      0 => 'bool',
      'imgtype' => 'int',
    ),
    'imagick::shadeimage' => 
    array (
      0 => 'bool',
      'gray' => 'bool',
      'azimuth' => 'float',
      'elevation' => 'float',
    ),
    'imagick::shadowimage' => 
    array (
      0 => 'bool',
      'opacity' => 'float',
      'sigma' => 'float',
      'x' => 'int',
      'y' => 'int',
    ),
    'imagick::sharpenimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'sigma' => 'float',
      'channel=' => 'int',
    ),
    'imagick::shaveimage' => 
    array (
      0 => 'bool',
      'columns' => 'int',
      'rows' => 'int',
    ),
    'imagick::shearimage' => 
    array (
      0 => 'bool',
      'background_color' => 'ImagickPixel|string',
      'x_shear' => 'float',
      'y_shear' => 'float',
    ),
    'imagick::sigmoidalcontrastimage' => 
    array (
      0 => 'bool',
      'sharpen' => 'bool',
      'alpha' => 'float',
      'beta' => 'float',
      'channel=' => 'int',
    ),
    'imagick::similarityimage' => 
    array (
      0 => 'Imagick',
      'image' => 'Imagick',
      '&offset=' => 'array<array-key, mixed>',
      '&similarity=' => 'float',
      'threshold=' => 'float',
      'metric=' => 'int',
    ),
    'imagick::sketchimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'sigma' => 'float',
      'angle' => 'float',
    ),
    'imagick::smushimages' => 
    array (
      0 => 'Imagick',
      'stack' => 'bool',
      'offset' => 'int',
    ),
    'imagick::solarizeimage' => 
    array (
      0 => 'bool',
      'threshold' => 'int',
    ),
    'imagick::sparsecolorimage' => 
    array (
      0 => 'bool',
      'sparsecolormethod' => 'int',
      'arguments' => 'array<array-key, mixed>',
      'channel=' => 'int',
    ),
    'imagick::spliceimage' => 
    array (
      0 => 'bool',
      'width' => 'int',
      'height' => 'int',
      'x' => 'int',
      'y' => 'int',
    ),
    'imagick::spreadimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
    ),
    'imagick::statisticimage' => 
    array (
      0 => 'bool',
      'type' => 'int',
      'width' => 'int',
      'height' => 'int',
      'channel=' => 'int',
    ),
    'imagick::steganoimage' => 
    array (
      0 => 'Imagick',
      'watermark' => 'Imagick',
      'offset' => 'int',
    ),
    'imagick::stereoimage' => 
    array (
      0 => 'bool',
      'offset_image' => 'Imagick',
    ),
    'imagick::stripimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::subimagematch' => 
    array (
      0 => 'Imagick',
      'image' => 'Imagick',
      '&w offset=' => 'array<array-key, mixed>',
      '&w similarity=' => 'float',
      'threshold=' => 'float',
      'metric=' => 'int',
    ),
    'imagick::swirlimage' => 
    array (
      0 => 'bool',
      'degrees' => 'float',
    ),
    'imagick::textureimage' => 
    array (
      0 => 'Imagick',
      'texture' => 'Imagick',
    ),
    'imagick::thresholdimage' => 
    array (
      0 => 'bool',
      'threshold' => 'float',
      'channel=' => 'int',
    ),
    'imagick::thumbnailimage' => 
    array (
      0 => 'bool',
      'columns' => 'int|null',
      'rows' => 'int|null',
      'bestfit=' => 'bool',
      'fill=' => 'bool',
      'legacy=' => 'bool',
    ),
    'imagick::tintimage' => 
    array (
      0 => 'bool',
      'tint_color' => 'ImagickPixel|string',
      'opacity_color' => 'ImagickPixel|string',
      'legacy=' => 'bool',
    ),
    'imagick::transformimagecolorspace' => 
    array (
      0 => 'bool',
      'colorspace' => 'int',
    ),
    'imagick::transparentpaintimage' => 
    array (
      0 => 'bool',
      'target_color' => 'ImagickPixel|string',
      'alpha' => 'float',
      'fuzz' => 'float',
      'invert' => 'bool',
    ),
    'imagick::transposeimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::transverseimage' => 
    array (
      0 => 'bool',
    ),
    'imagick::trimimage' => 
    array (
      0 => 'bool',
      'fuzz' => 'float',
    ),
    'imagick::uniqueimagecolors' => 
    array (
      0 => 'bool',
    ),
    'imagick::unsharpmaskimage' => 
    array (
      0 => 'bool',
      'radius' => 'float',
      'sigma' => 'float',
      'amount' => 'float',
      'threshold' => 'float',
      'channel=' => 'int',
    ),
    'imagick::valid' => 
    array (
      0 => 'bool',
    ),
    'imagick::vignetteimage' => 
    array (
      0 => 'bool',
      'black_point' => 'float',
      'white_point' => 'float',
      'x' => 'int',
      'y' => 'int',
    ),
    'imagick::waveimage' => 
    array (
      0 => 'bool',
      'amplitude' => 'float',
      'length' => 'float',
    ),
    'imagick::whitethresholdimage' => 
    array (
      0 => 'bool',
      'threshold_color' => 'ImagickPixel|string',
    ),
    'imagick::writeimage' => 
    array (
      0 => 'bool',
      'filename=' => 'null|string',
    ),
    'imagick::writeimagefile' => 
    array (
      0 => 'bool',
      'filehandle' => 'resource',
      'format=' => 'null|string',
    ),
    'imagick::writeimages' => 
    array (
      0 => 'bool',
      'filename' => 'string',
      'adjoin' => 'bool',
    ),
    'imagick::writeimagesfile' => 
    array (
      0 => 'bool',
      'filehandle' => 'resource',
      'format=' => 'null|string',
    ),
    'imagickdraw::affine' => 
    array (
      0 => 'bool',
      'affine' => 'array<string, float>',
    ),
    'imagickdraw::annotation' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
      'text' => 'string',
    ),
    'imagickdraw::arc' => 
    array (
      0 => 'bool',
      'start_x' => 'float',
      'start_y' => 'float',
      'end_x' => 'float',
      'end_y' => 'float',
      'start_angle' => 'float',
      'end_angle' => 'float',
    ),
    'imagickdraw::bezier' => 
    array (
      0 => 'bool',
      'coordinates' => 'list<array{x: float, y: float}>',
    ),
    'imagickdraw::circle' => 
    array (
      0 => 'bool',
      'origin_x' => 'float',
      'origin_y' => 'float',
      'perimeter_x' => 'float',
      'perimeter_y' => 'float',
    ),
    'imagickdraw::clear' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::clone' => 
    array (
      0 => 'ImagickDraw',
    ),
    'imagickdraw::color' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
      'paint' => 'int',
    ),
    'imagickdraw::comment' => 
    array (
      0 => 'bool',
      'comment' => 'string',
    ),
    'imagickdraw::composite' => 
    array (
      0 => 'bool',
      'composite' => 'int',
      'x' => 'float',
      'y' => 'float',
      'width' => 'float',
      'height' => 'float',
      'image' => 'Imagick',
    ),
    'imagickdraw::destroy' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::ellipse' => 
    array (
      0 => 'bool',
      'origin_x' => 'float',
      'origin_y' => 'float',
      'radius_x' => 'float',
      'radius_y' => 'float',
      'angle_start' => 'float',
      'angle_end' => 'float',
    ),
    'imagickdraw::getbordercolor' => 
    array (
      0 => 'ImagickPixel',
    ),
    'imagickdraw::getclippath' => 
    array (
      0 => 'false|string',
    ),
    'imagickdraw::getcliprule' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::getclipunits' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::getdensity' => 
    array (
      0 => 'null|string',
    ),
    'imagickdraw::getfillcolor' => 
    array (
      0 => 'ImagickPixel',
    ),
    'imagickdraw::getfillopacity' => 
    array (
      0 => 'float',
    ),
    'imagickdraw::getfillrule' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::getfont' => 
    array (
      0 => 'string',
    ),
    'imagickdraw::getfontfamily' => 
    array (
      0 => 'string',
    ),
    'imagickdraw::getfontresolution' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'imagickdraw::getfontsize' => 
    array (
      0 => 'float',
    ),
    'imagickdraw::getfontstretch' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::getfontstyle' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::getfontweight' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::getgravity' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::getopacity' => 
    array (
      0 => 'float',
    ),
    'imagickdraw::getstrokeantialias' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::getstrokecolor' => 
    array (
      0 => 'ImagickPixel',
    ),
    'imagickdraw::getstrokedasharray' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'imagickdraw::getstrokedashoffset' => 
    array (
      0 => 'float',
    ),
    'imagickdraw::getstrokelinecap' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::getstrokelinejoin' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::getstrokemiterlimit' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::getstrokeopacity' => 
    array (
      0 => 'float',
    ),
    'imagickdraw::getstrokewidth' => 
    array (
      0 => 'float',
    ),
    'imagickdraw::gettextalignment' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::gettextantialias' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::gettextdecoration' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::gettextdirection' => 
    array (
      0 => 'int',
    ),
    'imagickdraw::gettextencoding' => 
    array (
      0 => 'string',
    ),
    'imagickdraw::gettextinterlinespacing' => 
    array (
      0 => 'float',
    ),
    'imagickdraw::gettextinterwordspacing' => 
    array (
      0 => 'float',
    ),
    'imagickdraw::gettextkerning' => 
    array (
      0 => 'float',
    ),
    'imagickdraw::gettextundercolor' => 
    array (
      0 => 'ImagickPixel',
    ),
    'imagickdraw::getvectorgraphics' => 
    array (
      0 => 'string',
    ),
    'imagickdraw::line' => 
    array (
      0 => 'bool',
      'start_x' => 'float',
      'start_y' => 'float',
      'end_x' => 'float',
      'end_y' => 'float',
    ),
    'imagickdraw::pathclose' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::pathcurvetoabsolute' => 
    array (
      0 => 'bool',
      'x1' => 'float',
      'y1' => 'float',
      'x2' => 'float',
      'y2' => 'float',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathcurvetoquadraticbezierabsolute' => 
    array (
      0 => 'bool',
      'x1' => 'float',
      'y1' => 'float',
      'x_end' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathcurvetoquadraticbezierrelative' => 
    array (
      0 => 'bool',
      'x1' => 'float',
      'y1' => 'float',
      'x_end' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathcurvetoquadraticbeziersmoothabsolute' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathcurvetoquadraticbeziersmoothrelative' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathcurvetorelative' => 
    array (
      0 => 'bool',
      'x1' => 'float',
      'y1' => 'float',
      'x2' => 'float',
      'y2' => 'float',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathcurvetosmoothabsolute' => 
    array (
      0 => 'bool',
      'x2' => 'float',
      'y2' => 'float',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathcurvetosmoothrelative' => 
    array (
      0 => 'bool',
      'x2' => 'float',
      'y2' => 'float',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathellipticarcabsolute' => 
    array (
      0 => 'bool',
      'rx' => 'float',
      'ry' => 'float',
      'x_axis_rotation' => 'float',
      'large_arc' => 'bool',
      'sweep' => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathellipticarcrelative' => 
    array (
      0 => 'bool',
      'rx' => 'float',
      'ry' => 'float',
      'x_axis_rotation' => 'float',
      'large_arc' => 'bool',
      'sweep' => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathfinish' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::pathlinetoabsolute' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathlinetohorizontalabsolute' => 
    array (
      0 => 'bool',
      'x' => 'float',
    ),
    'imagickdraw::pathlinetohorizontalrelative' => 
    array (
      0 => 'bool',
      'x' => 'float',
    ),
    'imagickdraw::pathlinetorelative' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathlinetoverticalabsolute' => 
    array (
      0 => 'bool',
      'y' => 'float',
    ),
    'imagickdraw::pathlinetoverticalrelative' => 
    array (
      0 => 'bool',
      'y' => 'float',
    ),
    'imagickdraw::pathmovetoabsolute' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathmovetorelative' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::pathstart' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::point' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::polygon' => 
    array (
      0 => 'bool',
      'coordinates' => 'list<array{x: float, y: float}>',
    ),
    'imagickdraw::polyline' => 
    array (
      0 => 'bool',
      'coordinates' => 'list<array{x: float, y: float}>',
    ),
    'imagickdraw::pop' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::popclippath' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::popdefs' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::poppattern' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::push' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::pushclippath' => 
    array (
      0 => 'bool',
      'clip_mask_id' => 'string',
    ),
    'imagickdraw::pushdefs' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::pushpattern' => 
    array (
      0 => 'bool',
      'pattern_id' => 'string',
      'x' => 'float',
      'y' => 'float',
      'width' => 'float',
      'height' => 'float',
    ),
    'imagickdraw::rectangle' => 
    array (
      0 => 'bool',
      'top_left_x' => 'float',
      'top_left_y' => 'float',
      'bottom_right_x' => 'float',
      'bottom_right_y' => 'float',
    ),
    'imagickdraw::render' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::resetvectorgraphics' => 
    array (
      0 => 'bool',
    ),
    'imagickdraw::rotate' => 
    array (
      0 => 'bool',
      'degrees' => 'float',
    ),
    'imagickdraw::roundrectangle' => 
    array (
      0 => 'bool',
      'top_left_x' => 'float',
      'top_left_y' => 'float',
      'bottom_right_x' => 'float',
      'bottom_right_y' => 'float',
      'rounding_x' => 'float',
      'rounding_y' => 'float',
    ),
    'imagickdraw::scale' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::setbordercolor' => 
    array (
      0 => 'bool',
      'color' => 'ImagickPixel|string',
    ),
    'imagickdraw::setclippath' => 
    array (
      0 => 'bool',
      'clip_mask' => 'string',
    ),
    'imagickdraw::setcliprule' => 
    array (
      0 => 'bool',
      'fillrule' => 'int',
    ),
    'imagickdraw::setclipunits' => 
    array (
      0 => 'bool',
      'pathunits' => 'int',
    ),
    'imagickdraw::setdensity' => 
    array (
      0 => 'bool',
      'density' => 'string',
    ),
    'imagickdraw::setfillalpha' => 
    array (
      0 => 'bool',
      'alpha' => 'float',
    ),
    'imagickdraw::setfillcolor' => 
    array (
      0 => 'bool',
      'fill_color' => 'ImagickPixel|string',
    ),
    'imagickdraw::setfillopacity' => 
    array (
      0 => 'bool',
      'opacity' => 'float',
    ),
    'imagickdraw::setfillpatternurl' => 
    array (
      0 => 'bool',
      'fill_url' => 'string',
    ),
    'imagickdraw::setfillrule' => 
    array (
      0 => 'bool',
      'fillrule' => 'int',
    ),
    'imagickdraw::setfont' => 
    array (
      0 => 'bool',
      'font_name' => 'string',
    ),
    'imagickdraw::setfontfamily' => 
    array (
      0 => 'bool',
      'font_family' => 'string',
    ),
    'imagickdraw::setfontresolution' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickdraw::setfontsize' => 
    array (
      0 => 'bool',
      'point_size' => 'float',
    ),
    'imagickdraw::setfontstretch' => 
    array (
      0 => 'bool',
      'stretch' => 'int',
    ),
    'imagickdraw::setfontstyle' => 
    array (
      0 => 'bool',
      'style' => 'int',
    ),
    'imagickdraw::setfontweight' => 
    array (
      0 => 'bool',
      'weight' => 'int',
    ),
    'imagickdraw::setgravity' => 
    array (
      0 => 'bool',
      'gravity' => 'int',
    ),
    'imagickdraw::setopacity' => 
    array (
      0 => 'bool',
      'opacity' => 'float',
    ),
    'imagickdraw::setresolution' => 
    array (
      0 => 'bool',
      'resolution_x' => 'float',
      'resolution_y' => 'float',
    ),
    'imagickdraw::setstrokealpha' => 
    array (
      0 => 'bool',
      'alpha' => 'float',
    ),
    'imagickdraw::setstrokeantialias' => 
    array (
      0 => 'bool',
      'enabled' => 'bool',
    ),
    'imagickdraw::setstrokecolor' => 
    array (
      0 => 'bool',
      'color' => 'ImagickPixel|string',
    ),
    'imagickdraw::setstrokedasharray' => 
    array (
      0 => 'bool',
      'dashes' => 'list<float|int>|null',
    ),
    'imagickdraw::setstrokedashoffset' => 
    array (
      0 => 'bool',
      'dash_offset' => 'float',
    ),
    'imagickdraw::setstrokelinecap' => 
    array (
      0 => 'bool',
      'linecap' => 'int',
    ),
    'imagickdraw::setstrokelinejoin' => 
    array (
      0 => 'bool',
      'linejoin' => 'int',
    ),
    'imagickdraw::setstrokemiterlimit' => 
    array (
      0 => 'bool',
      'miterlimit' => 'int',
    ),
    'imagickdraw::setstrokeopacity' => 
    array (
      0 => 'bool',
      'opacity' => 'float',
    ),
    'imagickdraw::setstrokepatternurl' => 
    array (
      0 => 'bool',
      'stroke_url' => 'string',
    ),
    'imagickdraw::setstrokewidth' => 
    array (
      0 => 'bool',
      'width' => 'float',
    ),
    'imagickdraw::settextalignment' => 
    array (
      0 => 'bool',
      'align' => 'int',
    ),
    'imagickdraw::settextantialias' => 
    array (
      0 => 'bool',
      'antialias' => 'bool',
    ),
    'imagickdraw::settextdecoration' => 
    array (
      0 => 'bool',
      'decoration' => 'int',
    ),
    'imagickdraw::settextdirection' => 
    array (
      0 => 'bool',
      'direction' => 'int',
    ),
    'imagickdraw::settextencoding' => 
    array (
      0 => 'bool',
      'encoding' => 'string',
    ),
    'imagickdraw::settextinterlinespacing' => 
    array (
      0 => 'bool',
      'spacing' => 'float',
    ),
    'imagickdraw::settextinterwordspacing' => 
    array (
      0 => 'bool',
      'spacing' => 'float',
    ),
    'imagickdraw::settextkerning' => 
    array (
      0 => 'bool',
      'kerning' => 'float',
    ),
    'imagickdraw::settextundercolor' => 
    array (
      0 => 'bool',
      'under_color' => 'ImagickPixel|string',
    ),
    'imagickdraw::setvectorgraphics' => 
    array (
      0 => 'bool',
      'xml' => 'string',
    ),
    'imagickdraw::setviewbox' => 
    array (
      0 => 'bool',
      'left_x' => 'int',
      'top_y' => 'int',
      'right_x' => 'int',
      'bottom_y' => 'int',
    ),
    'imagickdraw::skewx' => 
    array (
      0 => 'bool',
      'degrees' => 'float',
    ),
    'imagickdraw::skewy' => 
    array (
      0 => 'bool',
      'degrees' => 'float',
    ),
    'imagickdraw::translate' => 
    array (
      0 => 'bool',
      'x' => 'float',
      'y' => 'float',
    ),
    'imagickkernel::addkernel' => 
    array (
      0 => 'void',
      'kernel' => 'ImagickKernel',
    ),
    'imagickkernel::addunitykernel' => 
    array (
      0 => 'void',
      'scale' => 'float',
    ),
    'imagickkernel::frombuiltin' => 
    array (
      0 => 'ImagickKernel',
      'kernel' => 'int',
      'shape' => 'string',
    ),
    'imagickkernel::frommatrix' => 
    array (
      0 => 'ImagickKernel',
      'matrix' => 'list<list<float>>',
      'origin=' => 'array<array-key, mixed>|null',
    ),
    'imagickkernel::getmatrix' => 
    array (
      0 => 'list<list<false|float>>',
    ),
    'imagickkernel::scale' => 
    array (
      0 => 'void',
      'scale' => 'float',
      'normalize_kernel=' => 'int|null',
    ),
    'imagickkernel::separate' => 
    array (
      0 => 'array<array-key, ImagickKernel>',
    ),
    'imagickpixel::__construct' => 
    array (
      0 => 'void',
      'color=' => 'null|string',
    ),
    'imagickpixel::clear' => 
    array (
      0 => 'bool',
    ),
    'imagickpixel::destroy' => 
    array (
      0 => 'bool',
    ),
    'imagickpixel::getcolor' => 
    array (
      0 => 'array{a: float|int, b: float|int, g: float|int, r: float|int}',
      'normalized=' => '0|1|2',
    ),
    'imagickpixel::getcolorasstring' => 
    array (
      0 => 'string',
    ),
    'imagickpixel::getcolorcount' => 
    array (
      0 => 'int',
    ),
    'imagickpixel::getcolorvalue' => 
    array (
      0 => 'float',
      'color' => 'int',
    ),
    'imagickpixel::gethsl' => 
    array (
      0 => 'array{hue: float, luminosity: float, saturation: float}',
    ),
    'imagickpixel::getindex' => 
    array (
      0 => 'int',
    ),
    'imagickpixel::ispixelsimilar' => 
    array (
      0 => 'bool|null',
      'color' => 'ImagickPixel',
      'fuzz' => 'float',
    ),
    'imagickpixel::ispixelsimilarquantum' => 
    array (
      0 => 'bool|null',
      'color' => 'string',
      'fuzz_quantum_range_scaled_by_square_root_of_three' => 'float',
    ),
    'imagickpixel::issimilar' => 
    array (
      0 => 'bool|null',
      'color' => 'ImagickPixel',
      'fuzz_quantum_range_scaled_by_square_root_of_three' => 'float',
    ),
    'imagickpixel::setcolor' => 
    array (
      0 => 'bool',
      'color' => 'string',
    ),
    'imagickpixel::setcolorcount' => 
    array (
      0 => 'bool',
      'color_count' => 'int',
    ),
    'imagickpixel::setcolorfrompixel' => 
    array (
      0 => 'bool',
      'pixel' => 'ImagickPixel',
    ),
    'imagickpixel::setcolorvalue' => 
    array (
      0 => 'bool',
      'color' => 'int',
      'value' => 'float',
    ),
    'imagickpixel::setcolorvaluequantum' => 
    array (
      0 => 'bool',
      'color' => 'int',
      'value' => 'IMAGICK_QUANTUM_TYPE',
    ),
    'imagickpixel::sethsl' => 
    array (
      0 => 'bool',
      'hue' => 'float',
      'saturation' => 'float',
      'luminosity' => 'float',
    ),
    'imagickpixel::setindex' => 
    array (
      0 => 'bool',
      'index' => 'IMAGICK_QUANTUM_TYPE',
    ),
    'imagickpixeliterator::clear' => 
    array (
      0 => 'bool',
    ),
    'imagickpixeliterator::destroy' => 
    array (
      0 => 'bool',
    ),
    'imagickpixeliterator::getcurrentiteratorrow' => 
    array (
      0 => 'array<array-key, mixed>|null',
    ),
    'imagickpixeliterator::getiteratorrow' => 
    array (
      0 => 'int',
    ),
    'imagickpixeliterator::getnextiteratorrow' => 
    array (
      0 => 'array<array-key, mixed>|null',
    ),
    'imagickpixeliterator::getpreviousiteratorrow' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'imagickpixeliterator::key' => 
    array (
      0 => 'int',
    ),
    'imagickpixeliterator::newpixeliterator' => 
    array (
      0 => 'bool',
      'imagick' => 'Imagick',
    ),
    'imagickpixeliterator::newpixelregioniterator' => 
    array (
      0 => 'bool',
      'imagick' => 'Imagick',
      'x' => 'int',
      'y' => 'int',
      'columns' => 'int',
      'rows' => 'int',
    ),
    'imagickpixeliterator::next' => 
    array (
      0 => 'void',
    ),
    'imagickpixeliterator::resetiterator' => 
    array (
      0 => 'bool',
    ),
    'imagickpixeliterator::rewind' => 
    array (
      0 => 'void',
    ),
    'imagickpixeliterator::setiteratorfirstrow' => 
    array (
      0 => 'bool',
    ),
    'imagickpixeliterator::setiteratorlastrow' => 
    array (
      0 => 'bool',
    ),
    'imagickpixeliterator::setiteratorrow' => 
    array (
      0 => 'bool',
      'row' => 'int',
    ),
    'imagickpixeliterator::synciterator' => 
    array (
      0 => 'bool',
    ),
    'imagickpixeliterator::valid' => 
    array (
      0 => 'bool',
    ),
    'memcached::__construct' => 
    array (
      0 => 'void',
      'persistent_id=' => 'null|string',
      'callback=' => 'callable|null',
      'connection_str=' => 'null|string',
    ),
    'memcached::add' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'mixed',
      'expiration=' => 'int',
    ),
    'memcached::addbykey' => 
    array (
      0 => 'bool',
      'server_key' => 'string',
      'key' => 'string',
      'value' => 'mixed',
      'expiration=' => 'int',
    ),
    'memcached::addserver' => 
    array (
      0 => 'bool',
      'host' => 'string',
      'port' => 'int',
      'weight=' => 'int',
    ),
    'memcached::addservers' => 
    array (
      0 => 'bool',
      'servers' => 'array<array-key, mixed>',
    ),
    'memcached::append' => 
    array (
      0 => 'bool|null',
      'key' => 'string',
      'value' => 'string',
    ),
    'memcached::appendbykey' => 
    array (
      0 => 'bool|null',
      'server_key' => 'string',
      'key' => 'string',
      'value' => 'string',
    ),
    'memcached::cas' => 
    array (
      0 => 'bool',
      'cas_token' => 'float|int|string',
      'key' => 'string',
      'value' => 'mixed',
      'expiration=' => 'int',
    ),
    'memcached::casbykey' => 
    array (
      0 => 'bool',
      'cas_token' => 'float|int|string',
      'server_key' => 'string',
      'key' => 'string',
      'value' => 'mixed',
      'expiration=' => 'int',
    ),
    'memcached::decrement' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'offset=' => 'int',
      'initial_value=' => 'int',
      'expiry=' => 'int',
    ),
    'memcached::decrementbykey' => 
    array (
      0 => 'false|int',
      'server_key' => 'string',
      'key' => 'string',
      'offset=' => 'int',
      'initial_value=' => 'int',
      'expiry=' => 'int',
    ),
    'memcached::delete' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'time=' => 'int',
    ),
    'memcached::deletebykey' => 
    array (
      0 => 'bool',
      'server_key' => 'string',
      'key' => 'string',
      'time=' => 'int',
    ),
    'memcached::deletemulti' => 
    array (
      0 => 'array<array-key, mixed>',
      'keys' => 'array<array-key, mixed>',
      'time=' => 'int',
    ),
    'memcached::deletemultibykey' => 
    array (
      0 => 'array<array-key, mixed>',
      'server_key' => 'string',
      'keys' => 'array<array-key, mixed>',
      'time=' => 'int',
    ),
    'memcached::fetch' => 
    array (
      0 => 'array<array-key, mixed>|false',
    ),
    'memcached::fetchall' => 
    array (
      0 => 'array<array-key, mixed>|false',
    ),
    'memcached::flush' => 
    array (
      0 => 'bool',
      'delay=' => 'int',
    ),
    'memcached::flushbuffers' => 
    array (
      0 => 'bool',
    ),
    'memcached::get' => 
    array (
      0 => 'false|mixed',
      'key' => 'string',
      'cache_cb=' => 'callable|null',
      'get_flags=' => 'int',
    ),
    'memcached::getallkeys' => 
    array (
      0 => 'array<array-key, mixed>|false',
    ),
    'memcached::getbykey' => 
    array (
      0 => 'false|mixed',
      'server_key' => 'string',
      'key' => 'string',
      'cache_cb=' => 'callable|null',
      'get_flags=' => 'int',
    ),
    'memcached::getdelayed' => 
    array (
      0 => 'bool',
      'keys' => 'array<array-key, mixed>',
      'with_cas=' => 'bool',
      'value_cb=' => 'callable|null',
    ),
    'memcached::getdelayedbykey' => 
    array (
      0 => 'bool',
      'server_key' => 'string',
      'keys' => 'array<array-key, mixed>',
      'with_cas=' => 'bool',
      'value_cb=' => 'callable|null',
    ),
    'memcached::getlastdisconnectedserver' => 
    array (
      0 => 'array<array-key, mixed>|false',
    ),
    'memcached::getlasterrorcode' => 
    array (
      0 => 'int',
    ),
    'memcached::getlasterrorerrno' => 
    array (
      0 => 'int',
    ),
    'memcached::getlasterrormessage' => 
    array (
      0 => 'string',
    ),
    'memcached::getmulti' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'keys' => 'array<array-key, mixed>',
      'get_flags=' => 'int',
    ),
    'memcached::getmultibykey' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'server_key' => 'string',
      'keys' => 'array<array-key, mixed>',
      'get_flags=' => 'int',
    ),
    'memcached::getoption' => 
    array (
      0 => 'false|mixed',
      'option' => 'int',
    ),
    'memcached::getresultcode' => 
    array (
      0 => 'int',
    ),
    'memcached::getresultmessage' => 
    array (
      0 => 'string',
    ),
    'memcached::getserverbykey' => 
    array (
      0 => 'array<array-key, mixed>',
      'server_key' => 'string',
    ),
    'memcached::getserverlist' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'memcached::getstats' => 
    array (
      0 => 'array<string, array<string, int|string>|false>|false',
      'type=' => 'null|string',
    ),
    'memcached::getversion' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'memcached::increment' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'offset=' => 'int',
      'initial_value=' => 'int',
      'expiry=' => 'int',
    ),
    'memcached::incrementbykey' => 
    array (
      0 => 'false|int',
      'server_key' => 'string',
      'key' => 'string',
      'offset=' => 'int',
      'initial_value=' => 'int',
      'expiry=' => 'int',
    ),
    'memcached::ispersistent' => 
    array (
      0 => 'bool',
    ),
    'memcached::ispristine' => 
    array (
      0 => 'bool',
    ),
    'memcached::prepend' => 
    array (
      0 => 'bool|null',
      'key' => 'string',
      'value' => 'string',
    ),
    'memcached::prependbykey' => 
    array (
      0 => 'bool|null',
      'server_key' => 'string',
      'key' => 'string',
      'value' => 'string',
    ),
    'memcached::quit' => 
    array (
      0 => 'bool',
    ),
    'memcached::replace' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'mixed',
      'expiration=' => 'int',
    ),
    'memcached::replacebykey' => 
    array (
      0 => 'bool',
      'server_key' => 'string',
      'key' => 'string',
      'value' => 'mixed',
      'expiration=' => 'int',
    ),
    'memcached::resetserverlist' => 
    array (
      0 => 'bool',
    ),
    'memcached::set' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'mixed',
      'expiration=' => 'int',
    ),
    'memcached::setbucket' => 
    array (
      0 => 'bool',
      'host_map' => 'array<array-key, mixed>',
      'forward_map' => 'array<array-key, mixed>|null',
      'replicas' => 'int',
    ),
    'memcached::setbykey' => 
    array (
      0 => 'bool',
      'server_key' => 'string',
      'key' => 'string',
      'value' => 'mixed',
      'expiration=' => 'int',
    ),
    'memcached::setencodingkey' => 
    array (
      0 => 'bool',
      'key' => 'string',
    ),
    'memcached::setmulti' => 
    array (
      0 => 'bool',
      'items' => 'array<array-key, mixed>',
      'expiration=' => 'int',
    ),
    'memcached::setmultibykey' => 
    array (
      0 => 'bool',
      'server_key' => 'string',
      'items' => 'array<array-key, mixed>',
      'expiration=' => 'int',
    ),
    'memcached::setoption' => 
    array (
      0 => 'bool',
      'option' => 'int',
      'value' => 'mixed',
    ),
    'memcached::setoptions' => 
    array (
      0 => 'bool',
      'options' => 'array<array-key, mixed>',
    ),
    'memcached::setsaslauthdata' => 
    array (
      0 => 'bool',
      'username' => 'string',
      'password' => 'string',
    ),
    'memcached::touch' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'expiration=' => 'int',
    ),
    'memcached::touchbykey' => 
    array (
      0 => 'bool',
      'server_key' => 'string',
      'key' => 'string',
      'expiration=' => 'int',
    ),
    'mongodb\\bson\\binary::__construct' => 
    array (
      0 => 'void',
      'data' => 'string',
      'type=' => 'int',
    ),
    'mongodb\\bson\\binary::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\binary::getdata' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\binary::gettype' => 
    array (
      0 => 'int',
    ),
    'mongodb\\bson\\dbpointer::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\decimal128::__construct' => 
    array (
      0 => 'void',
      'value' => 'string',
    ),
    'mongodb\\bson\\decimal128::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\document::fromphp' => 
    array (
      0 => 'MongoDB\\BSON\\Document',
      'value' => 'array<array-key, mixed>|object',
    ),
    'mongodb\\bson\\document::tophp' => 
    array (
      0 => 'array<array-key, mixed>|object',
      'typeMap=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\bson\\int64::__construct' => 
    array (
      0 => 'void',
      'value' => 'int|string',
    ),
    'mongodb\\bson\\int64::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\iterator::key' => 
    array (
      0 => 'int|string',
    ),
    'mongodb\\bson\\javascript::__construct' => 
    array (
      0 => 'void',
      'code' => 'string',
      'scope=' => 'array<array-key, mixed>|null|object',
    ),
    'mongodb\\bson\\javascript::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\javascript::getcode' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\javascript::getscope' => 
    array (
      0 => 'null|object',
    ),
    'mongodb\\bson\\objectid::__construct' => 
    array (
      0 => 'void',
      'id=' => 'null|string',
    ),
    'mongodb\\bson\\objectid::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\objectid::gettimestamp' => 
    array (
      0 => 'int',
    ),
    'mongodb\\bson\\packedarray::tophp' => 
    array (
      0 => 'array<array-key, mixed>|object',
      'typeMap=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\bson\\regex::__construct' => 
    array (
      0 => 'void',
      'pattern' => 'string',
      'flags=' => 'string',
    ),
    'mongodb\\bson\\regex::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\regex::getflags' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\regex::getpattern' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\symbol::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\timestamp::__construct' => 
    array (
      0 => 'void',
      'increment' => 'int|string',
      'timestamp' => 'int|string',
    ),
    'mongodb\\bson\\timestamp::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\timestamp::getincrement' => 
    array (
      0 => 'int',
    ),
    'mongodb\\bson\\timestamp::gettimestamp' => 
    array (
      0 => 'int',
    ),
    'mongodb\\bson\\undefined::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\utcdatetime::__construct' => 
    array (
      0 => 'void',
      'milliseconds=' => 'DateTimeInterface|MongoDB\\BSON\\Int64|int|null',
    ),
    'mongodb\\bson\\utcdatetime::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\bson\\utcdatetime::todatetime' => 
    array (
      0 => 'DateTime',
    ),
    'mongodb\\driver\\bulkwrite::count' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\bulkwrite::delete' => 
    array (
      0 => 'void',
      'filter' => 'array<array-key, mixed>|object',
      'deleteOptions=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\bulkwrite::insert' => 
    array (
      0 => 'mixed',
      'document' => 'array<array-key, mixed>|object',
    ),
    'mongodb\\driver\\bulkwrite::update' => 
    array (
      0 => 'void',
      'filter' => 'array<array-key, mixed>|object',
      'newObj' => 'array<array-key, mixed>|object',
      'updateOptions=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\clientencryption::createdatakey' => 
    array (
      0 => 'MongoDB\\BSON\\Binary',
      'kmsProvider' => 'string',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\clientencryption::encrypt' => 
    array (
      0 => 'MongoDB\\BSON\\Binary',
      'value' => 'mixed',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\clientencryption::encryptexpression' => 
    array (
      0 => 'object',
      'expr' => 'array<array-key, mixed>|object',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\clientencryption::rewrapmanydatakey' => 
    array (
      0 => 'object',
      'filter' => 'array<array-key, mixed>|object',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\command::__construct' => 
    array (
      0 => 'void',
      'document' => 'array<array-key, mixed>|object',
      'commandOptions=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\cursor::current' => 
    array (
      0 => 'array<array-key, mixed>|null|object',
    ),
    'mongodb\\driver\\cursor::getid' => 
    array (
      0 => 'MongoDB\\BSON\\Int64',
    ),
    'mongodb\\driver\\cursor::getserver' => 
    array (
      0 => 'MongoDB\\Driver\\Server',
    ),
    'mongodb\\driver\\cursor::isdead' => 
    array (
      0 => 'bool',
    ),
    'mongodb\\driver\\cursor::key' => 
    array (
      0 => 'int|null',
    ),
    'mongodb\\driver\\cursor::next' => 
    array (
      0 => 'void',
    ),
    'mongodb\\driver\\cursor::rewind' => 
    array (
      0 => 'void',
    ),
    'mongodb\\driver\\cursor::settypemap' => 
    array (
      0 => 'void',
      'typemap' => 'array<array-key, mixed>',
    ),
    'mongodb\\driver\\cursor::toarray' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'mongodb\\driver\\cursor::valid' => 
    array (
      0 => 'bool',
    ),
    'mongodb\\driver\\exception\\authenticationexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\exception\\bulkwriteexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\exception\\commandexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\exception\\commandexception::getresultdocument' => 
    array (
      0 => 'object',
    ),
    'mongodb\\driver\\exception\\connectionexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\exception\\connectiontimeoutexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\exception\\encryptionexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\exception\\executiontimeoutexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\exception\\invalidargumentexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\exception\\logicexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\exception\\runtimeexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\exception\\runtimeexception::haserrorlabel' => 
    array (
      0 => 'bool',
      'errorLabel' => 'string',
    ),
    'mongodb\\driver\\exception\\serverexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\exception\\unexpectedvalueexception::__tostring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\manager::__construct' => 
    array (
      0 => 'void',
      'uri=' => 'null|string',
      'uriOptions=' => 'array<array-key, mixed>|null',
      'driverOptions=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\manager::addsubscriber' => 
    array (
      0 => 'void',
      'subscriber' => 'MongoDB\\Driver\\Monitoring\\Subscriber',
    ),
    'mongodb\\driver\\manager::createclientencryption' => 
    array (
      0 => 'MongoDB\\Driver\\ClientEncryption',
      'options' => 'array<array-key, mixed>',
    ),
    'mongodb\\driver\\manager::executebulkwrite' => 
    array (
      0 => 'MongoDB\\Driver\\WriteResult',
      'namespace' => 'string',
      'bulk' => 'MongoDB\\Driver\\BulkWrite',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\manager::executecommand' => 
    array (
      0 => 'MongoDB\\Driver\\CursorInterface',
      'db' => 'string',
      'command' => 'MongoDB\\Driver\\Command',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\manager::executequery' => 
    array (
      0 => 'MongoDB\\Driver\\CursorInterface',
      'namespace' => 'string',
      'query' => 'MongoDB\\Driver\\Query',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\manager::executereadcommand' => 
    array (
      0 => 'MongoDB\\Driver\\CursorInterface',
      'db' => 'string',
      'command' => 'MongoDB\\Driver\\Command',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\manager::executereadwritecommand' => 
    array (
      0 => 'MongoDB\\Driver\\CursorInterface',
      'db' => 'string',
      'command' => 'MongoDB\\Driver\\Command',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\manager::executewritecommand' => 
    array (
      0 => 'MongoDB\\Driver\\CursorInterface',
      'db' => 'string',
      'command' => 'MongoDB\\Driver\\Command',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\manager::getencryptedfieldsmap' => 
    array (
      0 => 'array<array-key, mixed>|null|object',
    ),
    'mongodb\\driver\\manager::getreadconcern' => 
    array (
      0 => 'MongoDB\\Driver\\ReadConcern',
    ),
    'mongodb\\driver\\manager::getreadpreference' => 
    array (
      0 => 'MongoDB\\Driver\\ReadPreference',
    ),
    'mongodb\\driver\\manager::getservers' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'mongodb\\driver\\manager::getwriteconcern' => 
    array (
      0 => 'MongoDB\\Driver\\WriteConcern',
    ),
    'mongodb\\driver\\manager::removesubscriber' => 
    array (
      0 => 'void',
      'subscriber' => 'MongoDB\\Driver\\Monitoring\\Subscriber',
    ),
    'mongodb\\driver\\manager::selectserver' => 
    array (
      0 => 'MongoDB\\Driver\\Server',
      'readPreference=' => 'MongoDB\\Driver\\ReadPreference|null',
    ),
    'mongodb\\driver\\manager::startsession' => 
    array (
      0 => 'MongoDB\\Driver\\Session',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\monitoring\\addsubscriber' => 
    array (
      0 => 'void',
      'subscriber' => 'MongoDB\\Driver\\Monitoring\\Subscriber',
    ),
    'mongodb\\driver\\monitoring\\commandfailedevent::getcommandname' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\monitoring\\commandfailedevent::getdurationmicros' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\monitoring\\commandfailedevent::geterror' => 
    array (
      0 => 'Exception',
    ),
    'mongodb\\driver\\monitoring\\commandfailedevent::getoperationid' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\monitoring\\commandfailedevent::getreply' => 
    array (
      0 => 'object',
    ),
    'mongodb\\driver\\monitoring\\commandfailedevent::getrequestid' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\monitoring\\commandfailedevent::getserviceid' => 
    array (
      0 => 'MongoDB\\BSON\\ObjectId|null',
    ),
    'mongodb\\driver\\monitoring\\commandstartedevent::getcommand' => 
    array (
      0 => 'object',
    ),
    'mongodb\\driver\\monitoring\\commandstartedevent::getcommandname' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\monitoring\\commandstartedevent::getdatabasename' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\monitoring\\commandstartedevent::getoperationid' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\monitoring\\commandstartedevent::getrequestid' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\monitoring\\commandstartedevent::getserviceid' => 
    array (
      0 => 'MongoDB\\BSON\\ObjectId|null',
    ),
    'mongodb\\driver\\monitoring\\commandsucceededevent::getcommandname' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\monitoring\\commandsucceededevent::getdurationmicros' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\monitoring\\commandsucceededevent::getoperationid' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\monitoring\\commandsucceededevent::getreply' => 
    array (
      0 => 'object',
    ),
    'mongodb\\driver\\monitoring\\commandsucceededevent::getrequestid' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\monitoring\\commandsucceededevent::getserviceid' => 
    array (
      0 => 'MongoDB\\BSON\\ObjectId|null',
    ),
    'mongodb\\driver\\monitoring\\removesubscriber' => 
    array (
      0 => 'void',
      'subscriber' => 'MongoDB\\Driver\\Monitoring\\Subscriber',
    ),
    'mongodb\\driver\\query::__construct' => 
    array (
      0 => 'void',
      'filter' => 'array<array-key, mixed>|object',
      'queryOptions=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\readconcern::__construct' => 
    array (
      0 => 'void',
      'level=' => 'null|string',
    ),
    'mongodb\\driver\\readconcern::bsonserialize' => 
    array (
      0 => 'stdClass',
    ),
    'mongodb\\driver\\readconcern::getlevel' => 
    array (
      0 => 'null|string',
    ),
    'mongodb\\driver\\readconcern::isdefault' => 
    array (
      0 => 'bool',
    ),
    'mongodb\\driver\\readpreference::__construct' => 
    array (
      0 => 'void',
      'mode' => 'string',
      'tagSets=' => 'array<array-key, mixed>|null',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\readpreference::bsonserialize' => 
    array (
      0 => 'stdClass',
    ),
    'mongodb\\driver\\readpreference::gethedge' => 
    array (
      0 => 'null|object',
    ),
    'mongodb\\driver\\readpreference::getmaxstalenessseconds' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\readpreference::getmodestring' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\readpreference::gettagsets' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'mongodb\\driver\\server::executebulkwrite' => 
    array (
      0 => 'MongoDB\\Driver\\WriteResult',
      'namespace' => 'string',
      'bulkWrite' => 'MongoDB\\Driver\\BulkWrite',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\server::executecommand' => 
    array (
      0 => 'MongoDB\\Driver\\CursorInterface',
      'db' => 'string',
      'command' => 'MongoDB\\Driver\\Command',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\server::executequery' => 
    array (
      0 => 'MongoDB\\Driver\\CursorInterface',
      'namespace' => 'string',
      'query' => 'MongoDB\\Driver\\Query',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\server::executereadcommand' => 
    array (
      0 => 'MongoDB\\Driver\\CursorInterface',
      'db' => 'string',
      'command' => 'MongoDB\\Driver\\Command',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\server::executereadwritecommand' => 
    array (
      0 => 'MongoDB\\Driver\\CursorInterface',
      'db' => 'string',
      'command' => 'MongoDB\\Driver\\Command',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\server::executewritecommand' => 
    array (
      0 => 'MongoDB\\Driver\\CursorInterface',
      'db' => 'string',
      'command' => 'MongoDB\\Driver\\Command',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\server::gethost' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\server::getinfo' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'mongodb\\driver\\server::getlatency' => 
    array (
      0 => 'int|null',
    ),
    'mongodb\\driver\\server::getport' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\server::gettags' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'mongodb\\driver\\server::gettype' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\server::isarbiter' => 
    array (
      0 => 'bool',
    ),
    'mongodb\\driver\\server::ishidden' => 
    array (
      0 => 'bool',
    ),
    'mongodb\\driver\\server::ispassive' => 
    array (
      0 => 'bool',
    ),
    'mongodb\\driver\\server::isprimary' => 
    array (
      0 => 'bool',
    ),
    'mongodb\\driver\\server::issecondary' => 
    array (
      0 => 'bool',
    ),
    'mongodb\\driver\\serverapi::bsonserialize' => 
    array (
      0 => 'stdClass',
    ),
    'mongodb\\driver\\session::aborttransaction' => 
    array (
      0 => 'void',
    ),
    'mongodb\\driver\\session::advanceclustertime' => 
    array (
      0 => 'void',
      'clusterTime' => 'array<array-key, mixed>|object',
    ),
    'mongodb\\driver\\session::advanceoperationtime' => 
    array (
      0 => 'void',
      'operationTime' => 'MongoDB\\BSON\\TimestampInterface',
    ),
    'mongodb\\driver\\session::committransaction' => 
    array (
      0 => 'void',
    ),
    'mongodb\\driver\\session::endsession' => 
    array (
      0 => 'void',
    ),
    'mongodb\\driver\\session::getclustertime' => 
    array (
      0 => 'null|object',
    ),
    'mongodb\\driver\\session::getlogicalsessionid' => 
    array (
      0 => 'object',
    ),
    'mongodb\\driver\\session::getoperationtime' => 
    array (
      0 => 'MongoDB\\BSON\\Timestamp|null',
    ),
    'mongodb\\driver\\session::getserver' => 
    array (
      0 => 'MongoDB\\Driver\\Server|null',
    ),
    'mongodb\\driver\\session::gettransactionoptions' => 
    array (
      0 => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\session::gettransactionstate' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\session::isintransaction' => 
    array (
      0 => 'bool',
    ),
    'mongodb\\driver\\session::starttransaction' => 
    array (
      0 => 'void',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'mongodb\\driver\\writeconcern::__construct' => 
    array (
      0 => 'void',
      'w' => 'int|string',
      'wtimeout=' => 'int|null',
      'journal=' => 'bool|null',
    ),
    'mongodb\\driver\\writeconcern::bsonserialize' => 
    array (
      0 => 'stdClass',
    ),
    'mongodb\\driver\\writeconcern::getjournal' => 
    array (
      0 => 'bool|null',
    ),
    'mongodb\\driver\\writeconcern::getw' => 
    array (
      0 => 'int|null|string',
    ),
    'mongodb\\driver\\writeconcern::getwtimeout' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\writeconcern::isdefault' => 
    array (
      0 => 'bool',
    ),
    'mongodb\\driver\\writeconcernerror::getcode' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\writeconcernerror::getinfo' => 
    array (
      0 => 'null|object',
    ),
    'mongodb\\driver\\writeconcernerror::getmessage' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\writeerror::getcode' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\writeerror::getindex' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\writeerror::getinfo' => 
    array (
      0 => 'null|object',
    ),
    'mongodb\\driver\\writeerror::getmessage' => 
    array (
      0 => 'string',
    ),
    'mongodb\\driver\\writeresult::getdeletedcount' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\writeresult::getinsertedcount' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\writeresult::getmatchedcount' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\writeresult::getmodifiedcount' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\writeresult::getserver' => 
    array (
      0 => 'MongoDB\\Driver\\Server',
    ),
    'mongodb\\driver\\writeresult::getupsertedcount' => 
    array (
      0 => 'int',
    ),
    'mongodb\\driver\\writeresult::getupsertedids' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'mongodb\\driver\\writeresult::getwriteconcernerror' => 
    array (
      0 => 'MongoDB\\Driver\\WriteConcernError|null',
    ),
    'mongodb\\driver\\writeresult::getwriteerrors' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'mongodb\\driver\\writeresult::isacknowledged' => 
    array (
      0 => 'bool',
    ),
    'pcntl_sigtimedwait' => 
    array (
      0 => 'int',
      'signals' => 'array<array-key, mixed>',
      '&w info=' => 'array<array-key, mixed>',
      'seconds=' => 'int',
      'nanoseconds=' => 'int',
    ),
    'pcntl_sigwaitinfo' => 
    array (
      0 => 'int',
      'signals' => 'array<array-key, mixed>',
      '&w info=' => 'array<array-key, mixed>',
    ),
    'readline_list_history' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'redis::__destruct' => 
    array (
      0 => 'void',
    ),
    'redis::_prefix' => 
    array (
      0 => 'string',
      'key' => 'string',
    ),
    'redis::_unserialize' => 
    array (
      0 => 'mixed',
      'value' => 'string',
    ),
    'redis::append' => 
    array (
      0 => 'int',
      'key' => 'string',
      'value' => 'string',
    ),
    'redis::auth' => 
    array (
      0 => 'bool',
      'credentials' => 'string',
    ),
    'redis::bgrewriteaof' => 
    array (
      0 => 'bool',
    ),
    'redis::bgsave' => 
    array (
      0 => 'bool',
    ),
    'redis::bitcount' => 
    array (
      0 => 'int',
      'key' => 'string',
      'start=' => 'int',
      'end=' => 'int',
      'bybit=' => 'bool',
    ),
    'redis::bitop' => 
    array (
      0 => 'int',
      'operation' => 'string',
      'deskey' => 'string',
      'srckey' => 'string',
      '...other_keys=' => 'string',
    ),
    'redis::bitpos' => 
    array (
      0 => 'int',
      'key' => 'string',
      'bit' => 'bool',
      'start=' => 'int',
      'end=' => 'int',
      'bybit=' => 'bool',
    ),
    'redis::blpop' => 
    array (
      0 => 'array<array-key, mixed>|null',
      'key_or_keys' => 'array<array-key, string>',
      'timeout_or_key' => 'int',
      '...extra_args=' => 'mixed',
    ),
    'redis::brpop' => 
    array (
      0 => 'array<array-key, mixed>|null',
      'key_or_keys' => 'array<array-key, string>',
      'timeout_or_key' => 'int',
      '...extra_args=' => 'mixed',
    ),
    'redis::brpoplpush' => 
    array (
      0 => 'false|string',
      'src' => 'string',
      'dst' => 'string',
      'timeout' => 'int',
    ),
    'redis::clearlasterror' => 
    array (
      0 => 'bool',
    ),
    'redis::client' => 
    array (
      0 => 'mixed',
      'opt' => 'string',
      '...args=' => 'string',
    ),
    'redis::close' => 
    array (
      0 => 'bool',
    ),
    'redis::config' => 
    array (
      0 => 'string',
      'operation' => 'string',
      'key_or_settings=' => 'null|string',
      'value=' => 'null|string',
    ),
    'redis::connect' => 
    array (
      0 => 'bool',
      'host' => 'string',
      'port=' => 'int',
      'timeout=' => 'float',
      'persistent_id=' => 'null',
      'retry_interval=' => 'int',
      'read_timeout=' => 'float',
      'context=' => 'array<array-key, mixed>|null',
    ),
    'redis::dbsize' => 
    array (
      0 => 'int',
    ),
    'redis::decr' => 
    array (
      0 => 'int',
      'key' => 'string',
      'by=' => 'int',
    ),
    'redis::decrby' => 
    array (
      0 => 'int',
      'key' => 'string',
      'value' => 'int',
    ),
    'redis::del' => 
    array (
      0 => 'int',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'redis::delete' => 
    array (
      0 => 'int',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'redis::dump' => 
    array (
      0 => 'false|string',
      'key' => 'string',
    ),
    'redis::echo' => 
    array (
      0 => 'string',
      'str' => 'string',
    ),
    'redis::evalsha' => 
    array (
      0 => 'mixed',
      'sha1' => 'string',
      'args=' => 'array<array-key, mixed>',
      'num_keys=' => 'int',
    ),
    'redis::exec' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'redis::exists' => 
    array (
      0 => 'int',
      'key' => 'array<array-key, string>|string',
      '...other_keys=' => 'mixed',
    ),
    'redis::expire' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'timeout' => 'int',
      'mode=' => 'null|string',
    ),
    'redis::expireat' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'timestamp' => 'int',
      'mode=' => 'null|string',
    ),
    'redis::flushall' => 
    array (
      0 => 'bool',
      'sync=' => 'bool|null',
    ),
    'redis::flushdb' => 
    array (
      0 => 'bool',
      'sync=' => 'bool|null',
    ),
    'redis::geoadd' => 
    array (
      0 => 'int',
      'key' => 'string',
      'lng' => 'float',
      'lat' => 'float',
      'member' => 'string',
      '...other_triples_and_options=' => 'float|int|string',
    ),
    'redis::geodist' => 
    array (
      0 => 'float',
      'key' => 'string',
      'src' => 'string',
      'dst' => 'string',
      'unit=' => 'null|string',
    ),
    'redis::geohash' => 
    array (
      0 => 'array<int, string>',
      'key' => 'string',
      'member' => 'string',
      '...other_members=' => 'string',
    ),
    'redis::geopos' => 
    array (
      0 => 'array<int, array{0: string, 1: string}>',
      'key' => 'string',
      'member' => 'string',
      '...other_members=' => 'string',
    ),
    'redis::georadius' => 
    array (
      0 => 'array<int, mixed>|int',
      'key' => 'string',
      'lng' => 'float',
      'lat' => 'float',
      'radius' => 'float',
      'unit' => 'string',
      'options=' => 'array<string, mixed>',
    ),
    'redis::georadiusbymember' => 
    array (
      0 => 'array<int, mixed>|int',
      'key' => 'string',
      'member' => 'string',
      'radius' => 'float',
      'unit' => 'string',
      'options=' => 'array<string, mixed>',
    ),
    'redis::get' => 
    array (
      0 => 'false|string',
      'key' => 'string',
    ),
    'redis::getauth' => 
    array (
      0 => 'false|null|string',
    ),
    'redis::getbit' => 
    array (
      0 => 'int',
      'key' => 'string',
      'idx' => 'int',
    ),
    'redis::getdbnum' => 
    array (
      0 => 'int',
    ),
    'redis::gethost' => 
    array (
      0 => 'string',
    ),
    'redis::getlasterror' => 
    array (
      0 => 'null|string',
    ),
    'redis::getmode' => 
    array (
      0 => 'int',
    ),
    'redis::getoption' => 
    array (
      0 => 'int',
      'option' => 'int',
    ),
    'redis::getpersistentid' => 
    array (
      0 => 'null|string',
    ),
    'redis::getport' => 
    array (
      0 => 'int',
    ),
    'redis::getrange' => 
    array (
      0 => 'false|string',
      'key' => 'string',
      'start' => 'int',
      'end' => 'int',
    ),
    'redis::getreadtimeout' => 
    array (
      0 => 'float',
    ),
    'redis::getset' => 
    array (
      0 => 'string',
      'key' => 'string',
      'value' => 'string',
    ),
    'redis::gettimeout' => 
    array (
      0 => 'false|float',
    ),
    'redis::hdel' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'field' => 'string',
      '...other_fields=' => 'string',
    ),
    'redis::hexists' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'field' => 'string',
    ),
    'redis::hget' => 
    array (
      0 => 'false|string',
      'key' => 'string',
      'member' => 'string',
    ),
    'redis::hgetall' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
    ),
    'redis::hincrby' => 
    array (
      0 => 'int',
      'key' => 'string',
      'field' => 'string',
      'value' => 'int',
    ),
    'redis::hincrbyfloat' => 
    array (
      0 => 'float',
      'key' => 'string',
      'field' => 'string',
      'value' => 'float',
    ),
    'redis::hkeys' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
    ),
    'redis::hlen' => 
    array (
      0 => 'false|int',
      'key' => 'string',
    ),
    'redis::hmget' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'fields' => 'array<array-key, mixed>',
    ),
    'redis::hmset' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'fieldvals' => 'array<array-key, mixed>',
    ),
    'redis::hscan' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      '&iterator' => 'int|null',
      'pattern=' => 'null|string',
      'count=' => 'int',
    ),
    'redis::hset' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      '...fields_and_vals=' => 'string',
    ),
    'redis::hsetnx' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'field' => 'string',
      'value' => 'string',
    ),
    'redis::hvals' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
    ),
    'redis::incr' => 
    array (
      0 => 'int',
      'key' => 'string',
      'by=' => 'int',
    ),
    'redis::incrby' => 
    array (
      0 => 'int',
      'key' => 'string',
      'value' => 'int',
    ),
    'redis::incrbyfloat' => 
    array (
      0 => 'float',
      'key' => 'string',
      'value' => 'float',
    ),
    'redis::info' => 
    array (
      0 => 'array<array-key, mixed>',
      '...sections=' => 'string',
    ),
    'redis::isconnected' => 
    array (
      0 => 'bool',
    ),
    'redis::keys' => 
    array (
      0 => 'array<int, string>',
      'pattern' => 'string',
    ),
    'redis::lastsave' => 
    array (
      0 => 'int',
    ),
    'redis::lindex' => 
    array (
      0 => 'false|string',
      'key' => 'string',
      'index' => 'int',
    ),
    'redis::linsert' => 
    array (
      0 => 'int',
      'key' => 'string',
      'pos' => 'string',
      'pivot' => 'string',
      'value' => 'string',
    ),
    'redis::llen' => 
    array (
      0 => 'false|int',
      'key' => 'string',
    ),
    'redis::lpop' => 
    array (
      0 => 'false|string',
      'key' => 'string',
      'count=' => 'int',
    ),
    'redis::lpush' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      '...elements=' => 'string',
    ),
    'redis::lpushx' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'value' => 'string',
    ),
    'redis::lrange' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'start' => 'int',
      'end' => 'int',
    ),
    'redis::lrem' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'value' => 'string',
      'count=' => 'int',
    ),
    'redis::lset' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'index' => 'int',
      'value' => 'string',
    ),
    'redis::ltrim' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'start' => 'int',
      'end' => 'int',
    ),
    'redis::mget' => 
    array (
      0 => 'array<array-key, mixed>',
      'keys' => 'array<array-key, string>',
    ),
    'redis::migrate' => 
    array (
      0 => 'bool',
      'host' => 'string',
      'port' => 'int',
      'key' => 'array<array-key, string>|string',
      'dstdb' => 'int',
      'timeout' => 'int',
      'copy=' => 'bool',
      'replace=' => 'bool',
      'credentials=' => 'mixed',
    ),
    'redis::move' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'index' => 'int',
    ),
    'redis::mset' => 
    array (
      0 => 'bool',
      'key_values' => 'array<array-key, mixed>',
    ),
    'redis::msetnx' => 
    array (
      0 => 'bool',
      'key_values' => 'array<array-key, mixed>',
    ),
    'redis::multi' => 
    array (
      0 => 'Redis',
      'value=' => 'int',
    ),
    'redis::object' => 
    array (
      0 => 'false|int|string',
      'subcommand' => 'string',
      'key' => 'string',
    ),
    'redis::open' => 
    array (
      0 => 'bool',
      'host' => 'string',
      'port=' => 'int',
      'timeout=' => 'float',
      'persistent_id=' => 'null',
      'retry_interval=' => 'int',
      'read_timeout=' => 'float',
      'context=' => 'array<array-key, mixed>|null',
    ),
    'redis::pconnect' => 
    array (
      0 => 'bool',
      'host' => 'string',
      'port=' => 'int',
      'timeout=' => 'float',
      'persistent_id=' => 'null|string',
      'retry_interval=' => 'int',
      'read_timeout=' => 'float',
      'context=' => 'array<array-key, mixed>|null',
    ),
    'redis::persist' => 
    array (
      0 => 'bool',
      'key' => 'string',
    ),
    'redis::pexpire' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'timeout' => 'int',
      'mode=' => 'null|string',
    ),
    'redis::pexpireat' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'timestamp' => 'int',
      'mode=' => 'null|string',
    ),
    'redis::pfadd' => 
    array (
      0 => 'int',
      'key' => 'string',
      'elements' => 'array<array-key, mixed>',
    ),
    'redis::pfcount' => 
    array (
      0 => 'int',
      'key_or_keys' => 'array<array-key, mixed>|string',
    ),
    'redis::pfmerge' => 
    array (
      0 => 'bool',
      'dst' => 'string',
      'srckeys' => 'array<array-key, mixed>',
    ),
    'redis::ping' => 
    array (
      0 => 'string',
      'message=' => 'null|string',
    ),
    'redis::pipeline' => 
    array (
      0 => 'Redis',
    ),
    'redis::popen' => 
    array (
      0 => 'bool',
      'host' => 'string',
      'port=' => 'int',
      'timeout=' => 'float',
      'persistent_id=' => 'null|string',
      'retry_interval=' => 'int',
      'read_timeout=' => 'float',
      'context=' => 'array<array-key, mixed>|null',
    ),
    'redis::psetex' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'expire' => 'int',
      'value' => 'string',
    ),
    'redis::psubscribe' => 
    array (
      0 => 'bool',
      'patterns' => 'array<array-key, mixed>',
      'cb' => 'callable',
    ),
    'redis::pttl' => 
    array (
      0 => 'false|int',
      'key' => 'string',
    ),
    'redis::publish' => 
    array (
      0 => 'int',
      'channel' => 'string',
      'message' => 'string',
    ),
    'redis::pubsub' => 
    array (
      0 => 'array<array-key, mixed>|int',
      'command' => 'string',
      'arg=' => 'array<array-key, mixed>|string',
    ),
    'redis::punsubscribe' => 
    array (
      0 => 'array<array-key, mixed>|bool',
      'patterns' => 'array<array-key, mixed>',
    ),
    'redis::randomkey' => 
    array (
      0 => 'string',
    ),
    'redis::rawcommand' => 
    array (
      0 => 'mixed',
      'command' => 'string',
      '...args=' => 'mixed',
    ),
    'redis::rename' => 
    array (
      0 => 'bool',
      'old_name' => 'string',
      'new_name' => 'string',
    ),
    'redis::renamenx' => 
    array (
      0 => 'bool',
      'key_src' => 'string',
      'key_dst' => 'string',
    ),
    'redis::restore' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'ttl' => 'int',
      'value' => 'string',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'redis::role' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'redis::rpop' => 
    array (
      0 => 'false|string',
      'key' => 'string',
      'count=' => 'int',
    ),
    'redis::rpoplpush' => 
    array (
      0 => 'string',
      'srckey' => 'string',
      'dstkey' => 'string',
    ),
    'redis::rpush' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      '...elements=' => 'string',
    ),
    'redis::rpushx' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'value' => 'string',
    ),
    'redis::sadd' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'value' => 'string',
      '...other_values=' => 'string',
    ),
    'redis::saddarray' => 
    array (
      0 => 'int',
      'key' => 'string',
      'values' => 'array<array-key, mixed>',
    ),
    'redis::save' => 
    array (
      0 => 'bool',
    ),
    'redis::scan' => 
    array (
      0 => 'array<int, string>|false',
      '&iterator' => 'int|null',
      'pattern=' => 'null|string',
      'count=' => 'int',
      'type=' => 'null|string',
    ),
    'redis::scard' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'redis::script' => 
    array (
      0 => 'mixed',
      'command' => 'string',
      '...args=' => 'mixed',
    ),
    'redis::sdiff' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'redis::sdiffstore' => 
    array (
      0 => 'false|int',
      'dst' => 'string',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'redis::select' => 
    array (
      0 => 'bool',
      'db' => 'int',
    ),
    'redis::set' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'mixed',
      'options=' => 'array<array-key, mixed>',
    ),
    'redis::setbit' => 
    array (
      0 => 'int',
      'key' => 'string',
      'idx' => 'int',
      'value' => 'bool',
    ),
    'redis::setex' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'expire' => 'int',
      'value' => 'string',
    ),
    'redis::setnx' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'string',
    ),
    'redis::setoption' => 
    array (
      0 => 'bool',
      'option' => 'int',
      'value' => 'mixed',
    ),
    'redis::setrange' => 
    array (
      0 => 'int',
      'key' => 'string',
      'index' => 'int',
      'value' => 'string',
    ),
    'redis::sinter' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'redis::sinterstore' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'redis::sismember' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'string',
    ),
    'redis::slaveof' => 
    array (
      0 => 'bool',
      'host=' => 'null|string',
      'port=' => 'int',
    ),
    'redis::slowlog' => 
    array (
      0 => 'mixed',
      'operation' => 'string',
      'length=' => 'int',
    ),
    'redis::smembers' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
    ),
    'redis::smove' => 
    array (
      0 => 'bool',
      'src' => 'string',
      'dst' => 'string',
      'value' => 'string',
    ),
    'redis::sort' => 
    array (
      0 => 'array<array-key, mixed>|int',
      'key' => 'string',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'redis::sortasc' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'pattern=' => 'null|string',
      'get=' => 'string',
      'offset=' => 'int',
      'count=' => 'int',
      'store=' => 'null|string',
    ),
    'redis::sortascalpha' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'pattern=' => 'null|string',
      'get=' => 'string',
      'offset=' => 'int',
      'count=' => 'int',
      'store=' => 'null|string',
    ),
    'redis::sortdesc' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'pattern=' => 'null|string',
      'get=' => 'string',
      'offset=' => 'int',
      'count=' => 'int',
      'store=' => 'null|string',
    ),
    'redis::sortdescalpha' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'pattern=' => 'null|string',
      'get=' => 'string',
      'offset=' => 'int',
      'count=' => 'int',
      'store=' => 'null|string',
    ),
    'redis::spop' => 
    array (
      0 => 'false|string',
      'key' => 'string',
      'count=' => 'int',
    ),
    'redis::srandmember' => 
    array (
      0 => 'array<array-key, mixed>|false|string',
      'key' => 'string',
      'count=' => 'int',
    ),
    'redis::srem' => 
    array (
      0 => 'int',
      'key' => 'string',
      'value' => 'string',
      '...other_values=' => 'string',
    ),
    'redis::sscan' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'key' => 'string',
      '&iterator' => 'int|null',
      'pattern=' => 'null|string',
      'count=' => 'int',
    ),
    'redis::strlen' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'redis::subscribe' => 
    array (
      0 => 'bool',
      'channels' => 'array<array-key, mixed>',
      'cb' => 'callable',
    ),
    'redis::sunion' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'redis::sunionstore' => 
    array (
      0 => 'int',
      'dst' => 'string',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'redis::swapdb' => 
    array (
      0 => 'bool',
      'src' => 'int',
      'dst' => 'int',
    ),
    'redis::time' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'redis::ttl' => 
    array (
      0 => 'false|int',
      'key' => 'string',
    ),
    'redis::type' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'redis::unlink' => 
    array (
      0 => 'int',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'redis::unsubscribe' => 
    array (
      0 => 'array<array-key, mixed>|bool',
      'channels' => 'array<array-key, mixed>',
    ),
    'redis::wait' => 
    array (
      0 => 'int',
      'numreplicas' => 'int',
      'timeout' => 'int',
    ),
    'redis::watch' => 
    array (
      0 => 'bool',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'redis::xack' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'group' => 'string',
      'ids' => 'array<array-key, mixed>',
    ),
    'redis::xadd' => 
    array (
      0 => 'false|string',
      'key' => 'string',
      'id' => 'string',
      'values' => 'array<array-key, mixed>',
      'maxlen=' => 'int',
      'approx=' => 'bool',
      'nomkstream=' => 'bool',
    ),
    'redis::xclaim' => 
    array (
      0 => 'array<array-key, mixed>|bool',
      'key' => 'string',
      'group' => 'string',
      'consumer' => 'string',
      'min_idle' => 'int',
      'ids' => 'array<array-key, mixed>',
      'options' => 'array<array-key, mixed>',
    ),
    'redis::xdel' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'ids' => 'array<array-key, mixed>',
    ),
    'redis::xgroup' => 
    array (
      0 => 'mixed',
      'operation' => 'string',
      'key=' => 'null|string',
      'group=' => 'null|string',
      'id_or_consumer=' => 'null|string',
      'mkstream=' => 'bool',
      'entries_read=' => 'int',
    ),
    'redis::xinfo' => 
    array (
      0 => 'mixed',
      'operation' => 'string',
      'arg1=' => 'null|string',
      'arg2=' => 'null|string',
      'count=' => 'int',
    ),
    'redis::xpending' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'key' => 'string',
      'group' => 'string',
      'start=' => 'null|string',
      'end=' => 'null|string',
      'count=' => 'int',
      'consumer=' => 'null|string',
    ),
    'redis::xrange' => 
    array (
      0 => 'array<array-key, mixed>|bool',
      'key' => 'string',
      'start' => 'string',
      'end' => 'string',
      'count=' => 'int',
    ),
    'redis::xread' => 
    array (
      0 => 'array<array-key, mixed>|bool',
      'streams' => 'array<array-key, mixed>',
      'count=' => 'int',
      'block=' => 'int',
    ),
    'redis::xreadgroup' => 
    array (
      0 => 'array<array-key, mixed>|bool',
      'group' => 'string',
      'consumer' => 'string',
      'streams' => 'array<array-key, mixed>',
      'count=' => 'int',
      'block=' => 'int',
    ),
    'redis::xrevrange' => 
    array (
      0 => 'array<array-key, mixed>|bool',
      'key' => 'string',
      'end' => 'string',
      'start' => 'string',
      'count=' => 'int',
    ),
    'redis::xtrim' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'threshold' => 'string',
      'approx=' => 'bool',
      'minid=' => 'bool',
      'limit=' => 'int',
    ),
    'redis::zadd' => 
    array (
      0 => 'int',
      'key' => 'string',
      'score_or_options' => 'float',
      '...more_scores_and_mems=' => 'string',
    ),
    'redis::zcard' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'redis::zcount' => 
    array (
      0 => 'int',
      'key' => 'string',
      'start' => 'string',
      'end' => 'string',
    ),
    'redis::zincrby' => 
    array (
      0 => 'float',
      'key' => 'string',
      'value' => 'float',
      'member' => 'string',
    ),
    'redis::zinter' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'keys' => 'array<array-key, mixed>',
      'weights=' => 'array<array-key, mixed>|null',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'redis::zinterstore' => 
    array (
      0 => 'int',
      'dst' => 'string',
      'keys' => 'array<array-key, mixed>',
      'weights=' => 'array<array-key, mixed>|null',
      'aggregate=' => 'null|string',
    ),
    'redis::zlexcount' => 
    array (
      0 => 'int',
      'key' => 'string',
      'min' => 'string',
      'max' => 'string',
    ),
    'redis::zrange' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'start' => 'int',
      'end' => 'int',
      'options=' => 'bool|null',
    ),
    'redis::zrangebylex' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'key' => 'string',
      'min' => 'string',
      'max' => 'string',
      'offset=' => 'int',
      'count=' => 'int',
    ),
    'redis::zrangebyscore' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'start' => 'string',
      'end' => 'string',
      'options=' => 'array<array-key, mixed>',
    ),
    'redis::zrank' => 
    array (
      0 => 'int',
      'key' => 'string',
      'member' => 'string',
    ),
    'redis::zrem' => 
    array (
      0 => 'int',
      'key' => 'string',
      'member' => 'string',
      '...other_members=' => 'string',
    ),
    'redis::zremrangebylex' => 
    array (
      0 => 'int',
      'key' => 'string',
      'min' => 'string',
      'max' => 'string',
    ),
    'redis::zremrangebyrank' => 
    array (
      0 => 'int',
      'key' => 'string',
      'start' => 'int',
      'end' => 'int',
    ),
    'redis::zremrangebyscore' => 
    array (
      0 => 'int',
      'key' => 'string',
      'start' => 'string',
      'end' => 'string',
    ),
    'redis::zrevrange' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'start' => 'int',
      'end' => 'int',
      'scores=' => 'bool',
    ),
    'redis::zrevrangebylex' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'max' => 'string',
      'min' => 'string',
      'offset=' => 'int',
      'count=' => 'int',
    ),
    'redis::zrevrangebyscore' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'max' => 'string',
      'min' => 'string',
      'options=' => 'array<array-key, mixed>',
    ),
    'redis::zrevrank' => 
    array (
      0 => 'int',
      'key' => 'string',
      'member' => 'string',
    ),
    'redis::zscan' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'key' => 'string',
      '&iterator' => 'int|null',
      'pattern=' => 'null|string',
      'count=' => 'int',
    ),
    'redis::zscore' => 
    array (
      0 => 'false|float',
      'key' => 'string',
      'member' => 'string',
    ),
    'redis::zunion' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'keys' => 'array<array-key, mixed>',
      'weights=' => 'array<array-key, mixed>|null',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'redis::zunionstore' => 
    array (
      0 => 'int',
      'dst' => 'string',
      'keys' => 'array<array-key, mixed>',
      'weights=' => 'array<array-key, mixed>|null',
      'aggregate=' => 'null|string',
    ),
    'redisarray::__call' => 
    array (
      0 => 'mixed',
      'function_name' => 'string',
      'arguments' => 'array<array-key, mixed>',
    ),
    'redisarray::__construct' => 
    array (
      0 => 'void',
      'name_or_hosts' => 'string',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'redisarray::_function' => 
    array (
      0 => 'bool|callable',
    ),
    'redisarray::_hosts' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'redisarray::_rehash' => 
    array (
      0 => 'bool|null',
      'fn=' => 'callable|null',
    ),
    'redisarray::_target' => 
    array (
      0 => 'null|string',
      'key' => 'string',
    ),
    'redisarray::del' => 
    array (
      0 => 'bool',
      'key' => 'string',
      '...otherkeys=' => 'string',
    ),
    'redisarray::exec' => 
    array (
      0 => 'array<array-key, mixed>|null',
    ),
    'redisarray::flushall' => 
    array (
      0 => 'bool',
    ),
    'redisarray::flushdb' => 
    array (
      0 => 'bool',
    ),
    'redisarray::info' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'redisarray::keys' => 
    array (
      0 => 'array<int, string>',
      'pattern' => 'string',
    ),
    'redisarray::mget' => 
    array (
      0 => 'array<array-key, mixed>',
      'keys' => 'array<array-key, string>',
    ),
    'redisarray::mset' => 
    array (
      0 => 'bool',
      'pairs' => 'array<array-key, mixed>',
    ),
    'redisarray::multi' => 
    array (
      0 => 'RedisArray',
      'host' => 'string',
      'mode=' => 'int|null',
    ),
    'redisarray::ping' => 
    array (
      0 => 'array<array-key, mixed>|bool',
    ),
    'redisarray::save' => 
    array (
      0 => 'bool',
    ),
    'redisarray::unlink' => 
    array (
      0 => 'int',
      'key' => 'string',
      '...otherkeys=' => 'string',
    ),
    'rediscluster::__construct' => 
    array (
      0 => 'void',
      'name' => 'null|string',
      'seeds=' => 'array<array-key, string>|null',
      'timeout=' => 'float',
      'read_timeout=' => 'float',
      'persistent=' => 'bool',
      'auth=' => 'null|string',
      'context=' => 'array<array-key, mixed>|null',
    ),
    'rediscluster::_masters' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'rediscluster::_prefix' => 
    array (
      0 => 'string',
      'key' => 'string',
    ),
    'rediscluster::_unserialize' => 
    array (
      0 => 'mixed',
      'value' => 'string',
    ),
    'rediscluster::append' => 
    array (
      0 => 'int',
      'key' => 'string',
      'value' => 'string',
    ),
    'rediscluster::bgrewriteaof' => 
    array (
      0 => 'bool',
      'key_or_address' => 'array{0: string, 1: int}|string',
    ),
    'rediscluster::bgsave' => 
    array (
      0 => 'bool',
      'key_or_address' => 'array{0: string, 1: int}|string',
    ),
    'rediscluster::bitcount' => 
    array (
      0 => 'int',
      'key' => 'string',
      'start=' => 'int',
      'end=' => 'int',
      'bybit=' => 'bool',
    ),
    'rediscluster::bitop' => 
    array (
      0 => 'int',
      'operation' => 'string',
      'deskey' => 'string',
      'srckey' => 'string',
      '...otherkeys=' => 'string',
    ),
    'rediscluster::bitpos' => 
    array (
      0 => 'int',
      'key' => 'string',
      'bit' => 'bool',
      'start=' => 'int',
      'end=' => 'int',
      'bybit=' => 'bool',
    ),
    'rediscluster::blpop' => 
    array (
      0 => 'array<array-key, mixed>|null',
      'key' => 'array<array-key, mixed>',
      'timeout_or_key' => 'int',
      '...extra_args=' => 'mixed',
    ),
    'rediscluster::brpop' => 
    array (
      0 => 'array<array-key, mixed>|null',
      'key' => 'array<array-key, mixed>',
      'timeout_or_key' => 'int',
      '...extra_args=' => 'mixed',
    ),
    'rediscluster::brpoplpush' => 
    array (
      0 => 'false|string',
      'srckey' => 'string',
      'deskey' => 'string',
      'timeout' => 'int',
    ),
    'rediscluster::clearlasterror' => 
    array (
      0 => 'bool',
    ),
    'rediscluster::client' => 
    array (
      0 => 'array<array-key, mixed>|bool|string',
      'key_or_address' => 'array{0: string, 1: int}|string',
      'subcommand' => 'string',
      'arg=' => 'null|string',
    ),
    'rediscluster::cluster' => 
    array (
      0 => 'mixed',
      'key_or_address' => 'array{0: string, 1: int}|string',
      'command' => 'string',
      '...extra_args=' => 'mixed',
    ),
    'rediscluster::command' => 
    array (
      0 => 'array<array-key, mixed>|bool',
      '...extra_args=' => 'mixed',
    ),
    'rediscluster::config' => 
    array (
      0 => 'array<array-key, mixed>|bool',
      'key_or_address' => 'array{0: string, 1: int}|string',
      'subcommand' => 'string',
      '...extra_args=' => 'string',
    ),
    'rediscluster::dbsize' => 
    array (
      0 => 'int',
      'key_or_address' => 'array{0: string, 1: int}|string',
    ),
    'rediscluster::decr' => 
    array (
      0 => 'int',
      'key' => 'string',
      'by=' => 'int',
    ),
    'rediscluster::decrby' => 
    array (
      0 => 'int',
      'key' => 'string',
      'value' => 'int',
    ),
    'rediscluster::del' => 
    array (
      0 => 'int',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'rediscluster::dump' => 
    array (
      0 => 'false|string',
      'key' => 'string',
    ),
    'rediscluster::echo' => 
    array (
      0 => 'string',
      'key_or_address' => 'array{0: string, 1: int}|string',
      'msg' => 'string',
    ),
    'rediscluster::evalsha' => 
    array (
      0 => 'mixed',
      'script_sha' => 'string',
      'args=' => 'array<array-key, mixed>',
      'num_keys=' => 'int',
    ),
    'rediscluster::exec' => 
    array (
      0 => 'array<array-key, mixed>|false',
    ),
    'rediscluster::exists' => 
    array (
      0 => 'bool',
      'key' => 'string',
      '...other_keys=' => 'mixed',
    ),
    'rediscluster::expire' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'timeout' => 'int',
      'mode=' => 'null|string',
    ),
    'rediscluster::expireat' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'timestamp' => 'int',
      'mode=' => 'null|string',
    ),
    'rediscluster::flushall' => 
    array (
      0 => 'bool',
      'key_or_address' => 'array{0: string, 1: int}|string',
      'async=' => 'bool',
    ),
    'rediscluster::flushdb' => 
    array (
      0 => 'bool',
      'key_or_address' => 'array{0: string, 1: int}|string',
      'async=' => 'bool',
    ),
    'rediscluster::geoadd' => 
    array (
      0 => 'int',
      'key' => 'string',
      'lng' => 'float',
      'lat' => 'float',
      'member' => 'string',
      '...other_triples_and_options=' => 'float|string',
    ),
    'rediscluster::geodist' => 
    array (
      0 => 'RedisCluster|false|float',
      'key' => 'string',
      'src' => 'string',
      'dest' => 'string',
      'unit=' => 'null|string',
    ),
    'rediscluster::geohash' => 
    array (
      0 => 'array<int, string>',
      'key' => 'string',
      'member' => 'string',
      '...other_members=' => 'string',
    ),
    'rediscluster::geopos' => 
    array (
      0 => 'array<int, array{0: string, 1: string}>',
      'key' => 'string',
      'member' => 'string',
      '...other_members=' => 'string',
    ),
    'rediscluster::georadius' => 
    array (
      0 => 'mixed',
      'key' => 'string',
      'lng' => 'float',
      'lat' => 'float',
      'radius' => 'float',
      'unit' => 'string',
      'options=' => 'array<array-key, mixed>',
    ),
    'rediscluster::georadiusbymember' => 
    array (
      0 => 'array<array-key, string>',
      'key' => 'string',
      'member' => 'string',
      'radius' => 'float',
      'unit' => 'string',
      'options=' => 'array<array-key, mixed>',
    ),
    'rediscluster::get' => 
    array (
      0 => 'false|string',
      'key' => 'string',
    ),
    'rediscluster::getbit' => 
    array (
      0 => 'int',
      'key' => 'string',
      'value' => 'int',
    ),
    'rediscluster::getlasterror' => 
    array (
      0 => 'null|string',
    ),
    'rediscluster::getmode' => 
    array (
      0 => 'int',
    ),
    'rediscluster::getoption' => 
    array (
      0 => 'int',
      'option' => 'int',
    ),
    'rediscluster::getrange' => 
    array (
      0 => 'string',
      'key' => 'string',
      'start' => 'int',
      'end' => 'int',
    ),
    'rediscluster::getset' => 
    array (
      0 => 'string',
      'key' => 'string',
      'value' => 'string',
    ),
    'rediscluster::hdel' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'member' => 'string',
      '...other_members=' => 'string',
    ),
    'rediscluster::hexists' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'member' => 'string',
    ),
    'rediscluster::hget' => 
    array (
      0 => 'false|string',
      'key' => 'string',
      'member' => 'string',
    ),
    'rediscluster::hgetall' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
    ),
    'rediscluster::hincrby' => 
    array (
      0 => 'int',
      'key' => 'string',
      'member' => 'string',
      'value' => 'int',
    ),
    'rediscluster::hincrbyfloat' => 
    array (
      0 => 'float',
      'key' => 'string',
      'member' => 'string',
      'value' => 'float',
    ),
    'rediscluster::hkeys' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
    ),
    'rediscluster::hlen' => 
    array (
      0 => 'false|int',
      'key' => 'string',
    ),
    'rediscluster::hmget' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'keys' => 'array<array-key, mixed>',
    ),
    'rediscluster::hmset' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'key_values' => 'array<array-key, mixed>',
    ),
    'rediscluster::hscan' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      '&iterator' => 'int|null',
      'pattern=' => 'null|string',
      'count=' => 'int',
    ),
    'rediscluster::hset' => 
    array (
      0 => 'int',
      'key' => 'string',
      'member' => 'string',
      'value' => 'string',
    ),
    'rediscluster::hsetnx' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'member' => 'string',
      'value' => 'string',
    ),
    'rediscluster::hstrlen' => 
    array (
      0 => 'int',
      'key' => 'string',
      'field' => 'string',
    ),
    'rediscluster::hvals' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
    ),
    'rediscluster::incr' => 
    array (
      0 => 'int',
      'key' => 'string',
      'by=' => 'int',
    ),
    'rediscluster::incrby' => 
    array (
      0 => 'int',
      'key' => 'string',
      'value' => 'int',
    ),
    'rediscluster::incrbyfloat' => 
    array (
      0 => 'float',
      'key' => 'string',
      'value' => 'float',
    ),
    'rediscluster::info' => 
    array (
      0 => 'array<array-key, mixed>',
      'key_or_address' => 'array{0: string, 1: int}|string',
      '...sections=' => 'string',
    ),
    'rediscluster::keys' => 
    array (
      0 => 'array<array-key, mixed>',
      'pattern' => 'string',
    ),
    'rediscluster::lastsave' => 
    array (
      0 => 'int',
      'key_or_address' => 'array{0: string, 1: int}|string',
    ),
    'rediscluster::lget' => 
    array (
      0 => 'RedisCluster|bool|string',
      'key' => 'string',
      'index' => 'int',
    ),
    'rediscluster::lindex' => 
    array (
      0 => 'false|string',
      'key' => 'string',
      'index' => 'int',
    ),
    'rediscluster::linsert' => 
    array (
      0 => 'int',
      'key' => 'string',
      'pos' => 'string',
      'pivot' => 'string',
      'value' => 'string',
    ),
    'rediscluster::llen' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'rediscluster::lpop' => 
    array (
      0 => 'false|string',
      'key' => 'string',
      'count=' => 'int',
    ),
    'rediscluster::lpush' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'value' => 'string',
      '...other_values=' => 'string',
    ),
    'rediscluster::lpushx' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'value' => 'string',
    ),
    'rediscluster::lrange' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'start' => 'int',
      'end' => 'int',
    ),
    'rediscluster::lrem' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'value' => 'string',
      'count=' => 'int',
    ),
    'rediscluster::lset' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'index' => 'int',
      'value' => 'string',
    ),
    'rediscluster::ltrim' => 
    array (
      0 => 'RedisCluster|bool',
      'key' => 'string',
      'start' => 'int',
      'end' => 'int',
    ),
    'rediscluster::mget' => 
    array (
      0 => 'array<array-key, mixed>',
      'keys' => 'array<array-key, mixed>',
    ),
    'rediscluster::mset' => 
    array (
      0 => 'bool',
      'key_values' => 'array<array-key, mixed>',
    ),
    'rediscluster::msetnx' => 
    array (
      0 => 'RedisCluster|array<array-key, mixed>|false',
      'key_values' => 'array<array-key, mixed>',
    ),
    'rediscluster::multi' => 
    array (
      0 => 'RedisCluster|bool',
      'value=' => 'int',
    ),
    'rediscluster::object' => 
    array (
      0 => 'false|int|string',
      'subcommand' => 'string',
      'key' => 'string',
    ),
    'rediscluster::persist' => 
    array (
      0 => 'bool',
      'key' => 'string',
    ),
    'rediscluster::pexpire' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'timeout' => 'int',
      'mode=' => 'null|string',
    ),
    'rediscluster::pexpireat' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'timestamp' => 'int',
      'mode=' => 'null|string',
    ),
    'rediscluster::pfadd' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'elements' => 'array<array-key, mixed>',
    ),
    'rediscluster::pfcount' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'rediscluster::pfmerge' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'keys' => 'array<array-key, mixed>',
    ),
    'rediscluster::ping' => 
    array (
      0 => 'string',
      'key_or_address' => 'array{0: string, 1: int}|string',
      'message=' => 'null|string',
    ),
    'rediscluster::psetex' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'timeout' => 'int',
      'value' => 'string',
    ),
    'rediscluster::psubscribe' => 
    array (
      0 => 'void',
      'patterns' => 'array<array-key, mixed>',
      'callback' => 'callable',
    ),
    'rediscluster::pttl' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'rediscluster::publish' => 
    array (
      0 => 'int',
      'channel' => 'string',
      'message' => 'string',
    ),
    'rediscluster::pubsub' => 
    array (
      0 => 'array<array-key, mixed>',
      'key_or_address' => 'string',
      '...values=' => 'string',
    ),
    'rediscluster::randomkey' => 
    array (
      0 => 'string',
      'key_or_address' => 'array{0: string, 1: int}|string',
    ),
    'rediscluster::rawcommand' => 
    array (
      0 => 'mixed',
      'key_or_address' => 'array{0: string, 1: int}|string',
      'command' => 'string',
      '...args=' => 'mixed',
    ),
    'rediscluster::rename' => 
    array (
      0 => 'bool',
      'key_src' => 'string',
      'key_dst' => 'string',
    ),
    'rediscluster::renamenx' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'newkey' => 'string',
    ),
    'rediscluster::restore' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'timeout' => 'int',
      'value' => 'string',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'rediscluster::role' => 
    array (
      0 => 'array<array-key, mixed>',
      'key_or_address' => 'array<array-key, mixed>|string',
    ),
    'rediscluster::rpop' => 
    array (
      0 => 'false|string',
      'key' => 'string',
      'count=' => 'int',
    ),
    'rediscluster::rpoplpush' => 
    array (
      0 => 'false|string',
      'src' => 'string',
      'dst' => 'string',
    ),
    'rediscluster::rpush' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      '...elements=' => 'string',
    ),
    'rediscluster::rpushx' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'value' => 'string',
    ),
    'rediscluster::sadd' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'value' => 'string',
      '...other_values=' => 'string',
    ),
    'rediscluster::saddarray' => 
    array (
      0 => 'false|int',
      'key' => 'string',
      'values' => 'array<array-key, mixed>',
    ),
    'rediscluster::save' => 
    array (
      0 => 'bool',
      'key_or_address' => 'array{0: string, 1: int}|string',
    ),
    'rediscluster::scan' => 
    array (
      0 => 'array<array-key, mixed>|false',
      '&iterator' => 'int|null',
      'key_or_address' => 'array{0: string, 1: int}|string',
      'pattern=' => 'null|string',
      'count=' => 'int',
    ),
    'rediscluster::scard' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'rediscluster::script' => 
    array (
      0 => 'array<array-key, mixed>|bool|string',
      'key_or_address' => 'array{0: string, 1: int}|string',
      '...args=' => 'string',
    ),
    'rediscluster::sdiff' => 
    array (
      0 => 'list<string>',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'rediscluster::sdiffstore' => 
    array (
      0 => 'int',
      'dst' => 'string',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'rediscluster::set' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'string',
      'options=' => 'array<array-key, mixed>|int',
    ),
    'rediscluster::setbit' => 
    array (
      0 => 'int',
      'key' => 'string',
      'offset' => 'int',
      'onoff' => 'bool',
    ),
    'rediscluster::setex' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'expire' => 'int',
      'value' => 'string',
    ),
    'rediscluster::setnx' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'string',
    ),
    'rediscluster::setoption' => 
    array (
      0 => 'bool',
      'option' => 'int',
      'value' => 'int|string',
    ),
    'rediscluster::setrange' => 
    array (
      0 => 'RedisCluster|false|int',
      'key' => 'string',
      'offset' => 'int',
      'value' => 'string',
    ),
    'rediscluster::sinter' => 
    array (
      0 => 'list<string>',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'rediscluster::sinterstore' => 
    array (
      0 => 'int',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'rediscluster::sismember' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'string',
    ),
    'rediscluster::slowlog' => 
    array (
      0 => 'array<array-key, mixed>|bool|int',
      'key_or_address' => 'array{0: string, 1: int}|string',
      '...args=' => 'string',
    ),
    'rediscluster::smembers' => 
    array (
      0 => 'list<string>',
      'key' => 'string',
    ),
    'rediscluster::smove' => 
    array (
      0 => 'bool',
      'src' => 'string',
      'dst' => 'string',
      'member' => 'string',
    ),
    'rediscluster::sort' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'rediscluster::spop' => 
    array (
      0 => 'string',
      'key' => 'string',
      'count=' => 'int',
    ),
    'rediscluster::srandmember' => 
    array (
      0 => 'array<array-key, mixed>|string',
      'key' => 'string',
      'count=' => 'int',
    ),
    'rediscluster::srem' => 
    array (
      0 => 'int',
      'key' => 'string',
      'value' => 'string',
      '...other_values=' => 'string',
    ),
    'rediscluster::sscan' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'key' => 'string',
      '&iterator' => 'int|null',
      'pattern=' => 'null',
      'count=' => 'int',
    ),
    'rediscluster::strlen' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'rediscluster::subscribe' => 
    array (
      0 => 'void',
      'channels' => 'array<array-key, mixed>',
      'cb' => 'callable',
    ),
    'rediscluster::sunion' => 
    array (
      0 => 'list<string>',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'rediscluster::sunionstore' => 
    array (
      0 => 'int',
      'dst' => 'string',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'rediscluster::time' => 
    array (
      0 => 'array<array-key, mixed>',
      'key_or_address' => 'array<array-key, mixed>|string',
    ),
    'rediscluster::ttl' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'rediscluster::type' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'rediscluster::unlink' => 
    array (
      0 => 'int',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'rediscluster::watch' => 
    array (
      0 => 'RedisCluster|bool',
      'key' => 'string',
      '...other_keys=' => 'string',
    ),
    'rediscluster::xack' => 
    array (
      0 => 'RedisCluster|false|int',
      'key' => 'string',
      'group' => 'string',
      'ids' => 'array<array-key, mixed>',
    ),
    'rediscluster::xadd' => 
    array (
      0 => 'RedisCluster|false|string',
      'key' => 'string',
      'id' => 'string',
      'values' => 'array<array-key, mixed>',
      'maxlen=' => 'int',
      'approx=' => 'bool',
    ),
    'rediscluster::xclaim' => 
    array (
      0 => 'RedisCluster|array<array-key, mixed>|false|string',
      'key' => 'string',
      'group' => 'string',
      'consumer' => 'string',
      'min_iddle' => 'int',
      'ids' => 'array<array-key, mixed>',
      'options' => 'array<array-key, mixed>',
    ),
    'rediscluster::xdel' => 
    array (
      0 => 'RedisCluster|false|int',
      'key' => 'string',
      'ids' => 'array<array-key, mixed>',
    ),
    'rediscluster::xgroup' => 
    array (
      0 => 'mixed',
      'operation' => 'string',
      'key=' => 'null|string',
      'group=' => 'null|string',
      'id_or_consumer=' => 'null|string',
      'mkstream=' => 'bool',
      'entries_read=' => 'int',
    ),
    'rediscluster::xinfo' => 
    array (
      0 => 'mixed',
      'operation' => 'string',
      'arg1=' => 'null|string',
      'arg2=' => 'null|string',
      'count=' => 'int',
    ),
    'rediscluster::xpending' => 
    array (
      0 => 'RedisCluster|array<array-key, mixed>|false',
      'key' => 'string',
      'group' => 'string',
      'start=' => 'null|string',
      'end=' => 'null|string',
      'count=' => 'int',
      'consumer=' => 'null|string',
    ),
    'rediscluster::xrange' => 
    array (
      0 => 'RedisCluster|array<array-key, mixed>|bool',
      'key' => 'string',
      'start' => 'string',
      'end' => 'string',
      'count=' => 'int',
    ),
    'rediscluster::xread' => 
    array (
      0 => 'RedisCluster|array<array-key, mixed>|bool',
      'streams' => 'array<array-key, mixed>',
      'count=' => 'int',
      'block=' => 'int',
    ),
    'rediscluster::xreadgroup' => 
    array (
      0 => 'RedisCluster|array<array-key, mixed>|bool',
      'group' => 'string',
      'consumer' => 'string',
      'streams' => 'array<array-key, mixed>',
      'count=' => 'int',
      'block=' => 'int',
    ),
    'rediscluster::xrevrange' => 
    array (
      0 => 'RedisCluster|array<array-key, mixed>|bool',
      'key' => 'string',
      'start' => 'string',
      'end' => 'string',
      'count=' => 'int',
    ),
    'rediscluster::xtrim' => 
    array (
      0 => 'RedisCluster|false|int',
      'key' => 'string',
      'maxlen' => 'int',
      'approx=' => 'bool',
      'minid=' => 'bool',
      'limit=' => 'int',
    ),
    'rediscluster::zadd' => 
    array (
      0 => 'int',
      'key' => 'string',
      'score_or_options' => 'float',
      '...more_scores_and_mems=' => 'string',
    ),
    'rediscluster::zcard' => 
    array (
      0 => 'int',
      'key' => 'string',
    ),
    'rediscluster::zcount' => 
    array (
      0 => 'int',
      'key' => 'string',
      'start' => 'string',
      'end' => 'string',
    ),
    'rediscluster::zincrby' => 
    array (
      0 => 'float',
      'key' => 'string',
      'value' => 'float',
      'member' => 'string',
    ),
    'rediscluster::zinterstore' => 
    array (
      0 => 'int',
      'dst' => 'string',
      'keys' => 'array<array-key, mixed>',
      'weights=' => 'array<array-key, mixed>|null',
      'aggregate=' => 'null|string',
    ),
    'rediscluster::zlexcount' => 
    array (
      0 => 'int',
      'key' => 'string',
      'min' => 'string',
      'max' => 'string',
    ),
    'rediscluster::zrange' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'start' => 'int',
      'end' => 'int',
      'options=' => 'bool|null',
    ),
    'rediscluster::zrangebylex' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'min' => 'string',
      'max' => 'string',
      'offset=' => 'int',
      'count=' => 'int',
    ),
    'rediscluster::zrangebyscore' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'start' => 'string',
      'end' => 'string',
      'options=' => 'array<array-key, mixed>',
    ),
    'rediscluster::zrank' => 
    array (
      0 => 'int',
      'key' => 'string',
      'member' => 'string',
    ),
    'rediscluster::zrem' => 
    array (
      0 => 'int',
      'key' => 'string',
      'value' => 'string',
      '...other_values=' => 'string',
    ),
    'rediscluster::zremrangebylex' => 
    array (
      0 => 'RedisCluster|false|int',
      'key' => 'string',
      'min' => 'string',
      'max' => 'string',
    ),
    'rediscluster::zremrangebyrank' => 
    array (
      0 => 'int',
      'key' => 'string',
      'min' => 'string',
      'max' => 'string',
    ),
    'rediscluster::zremrangebyscore' => 
    array (
      0 => 'int',
      'key' => 'string',
      'min' => 'string',
      'max' => 'string',
    ),
    'rediscluster::zrevrange' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'min' => 'string',
      'max' => 'string',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'rediscluster::zrevrangebylex' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'min' => 'string',
      'max' => 'string',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'rediscluster::zrevrangebyscore' => 
    array (
      0 => 'array<array-key, mixed>',
      'key' => 'string',
      'min' => 'string',
      'max' => 'string',
      'options=' => 'array<array-key, mixed>|null',
    ),
    'rediscluster::zrevrank' => 
    array (
      0 => 'int',
      'key' => 'string',
      'member' => 'string',
    ),
    'rediscluster::zscan' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'key' => 'string',
      '&iterator' => 'int|null',
      'pattern=' => 'null|string',
      'count=' => 'int',
    ),
    'rediscluster::zscore' => 
    array (
      0 => 'float',
      'key' => 'string',
      'member' => 'string',
    ),
    'rediscluster::zunionstore' => 
    array (
      0 => 'int',
      'dst' => 'string',
      'keys' => 'array<array-key, mixed>',
      'weights=' => 'array<array-key, mixed>|null',
      'aggregate=' => 'null|string',
    ),
    'swoole\\atomic::add' => 
    array (
      0 => 'int',
      'add_value=' => 'int',
    ),
    'swoole\\atomic::cmpset' => 
    array (
      0 => 'bool',
      'cmp_value' => 'int',
      'new_value' => 'int',
    ),
    'swoole\\atomic::get' => 
    array (
      0 => 'int',
    ),
    'swoole\\atomic::set' => 
    array (
      0 => 'void',
      'value' => 'int',
    ),
    'swoole\\atomic::sub' => 
    array (
      0 => 'int',
      'sub_value=' => 'int',
    ),
    'swoole\\client::__destruct' => 
    array (
      0 => 'void',
    ),
    'swoole\\client::close' => 
    array (
      0 => 'bool',
      'force=' => 'bool',
    ),
    'swoole\\client::connect' => 
    array (
      0 => 'bool',
      'host' => 'string',
      'port=' => 'int',
      'timeout=' => 'float',
      'sock_flag=' => 'int',
    ),
    'swoole\\client::getpeername' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'swoole\\client::getsockname' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'swoole\\client::isconnected' => 
    array (
      0 => 'bool',
    ),
    'swoole\\client::recv' => 
    array (
      0 => 'false|string',
      'size=' => 'int',
      'flag=' => 'int',
    ),
    'swoole\\client::send' => 
    array (
      0 => 'int',
      'data' => 'string',
      'flag=' => 'int',
    ),
    'swoole\\client::sendfile' => 
    array (
      0 => 'bool',
      'filename' => 'string',
      'offset=' => 'int',
      'length=' => 'int',
    ),
    'swoole\\client::sendto' => 
    array (
      0 => 'bool',
      'ip' => 'string',
      'port' => 'int',
      'data' => 'string',
    ),
    'swoole\\client::set' => 
    array (
      0 => 'bool',
      'settings' => 'array<array-key, mixed>',
    ),
    'swoole\\connection\\iterator::count' => 
    array (
      0 => 'int',
    ),
    'swoole\\connection\\iterator::current' => 
    array (
      0 => 'Connection',
    ),
    'swoole\\connection\\iterator::key' => 
    array (
      0 => 'int',
    ),
    'swoole\\connection\\iterator::next' => 
    array (
      0 => 'void',
    ),
    'swoole\\connection\\iterator::offsetexists' => 
    array (
      0 => 'bool',
      'fd' => 'int',
    ),
    'swoole\\connection\\iterator::offsetget' => 
    array (
      0 => 'Connection',
      'fd' => 'string',
    ),
    'swoole\\connection\\iterator::offsetset' => 
    array (
      0 => 'void',
      'fd' => 'int',
      'value' => 'mixed',
    ),
    'swoole\\connection\\iterator::offsetunset' => 
    array (
      0 => 'void',
      'fd' => 'int',
    ),
    'swoole\\connection\\iterator::rewind' => 
    array (
      0 => 'void',
    ),
    'swoole\\connection\\iterator::valid' => 
    array (
      0 => 'bool',
    ),
    'swoole\\coroutine::create' => 
    array (
      0 => 'false|int',
      'func' => 'callable',
      '...param=' => 'mixed',
    ),
    'swoole\\coroutine::getuid' => 
    array (
      0 => 'int',
    ),
    'swoole\\coroutine::resume' => 
    array (
      0 => 'bool',
      'cid' => 'int',
    ),
    'swoole\\coroutine::suspend' => 
    array (
      0 => 'bool',
    ),
    'swoole\\coroutine\\client::__destruct' => 
    array (
      0 => 'ReturnType',
    ),
    'swoole\\coroutine\\client::close' => 
    array (
      0 => 'bool',
    ),
    'swoole\\coroutine\\client::connect' => 
    array (
      0 => 'bool',
      'host' => 'string',
      'port=' => 'int',
      'timeout=' => 'float',
      'sock_flag=' => 'int',
    ),
    'swoole\\coroutine\\client::getpeername' => 
    array (
      0 => 'array<array-key, mixed>|false',
    ),
    'swoole\\coroutine\\client::getsockname' => 
    array (
      0 => 'array<array-key, mixed>|false',
    ),
    'swoole\\coroutine\\client::isconnected' => 
    array (
      0 => 'bool',
    ),
    'swoole\\coroutine\\client::recv' => 
    array (
      0 => 'false|string',
      'timeout=' => 'float',
    ),
    'swoole\\coroutine\\client::send' => 
    array (
      0 => 'false|int',
      'data' => 'string',
      'timeout=' => 'float',
    ),
    'swoole\\coroutine\\client::sendfile' => 
    array (
      0 => 'bool',
      'filename' => 'string',
      'offset=' => 'int',
      'length=' => 'int',
    ),
    'swoole\\coroutine\\client::sendto' => 
    array (
      0 => 'bool',
      'address' => 'string',
      'port' => 'int',
      'data' => 'string',
    ),
    'swoole\\coroutine\\client::set' => 
    array (
      0 => 'bool',
      'settings' => 'array<array-key, mixed>',
    ),
    'swoole\\coroutine\\http\\client::__destruct' => 
    array (
      0 => 'ReturnType',
    ),
    'swoole\\coroutine\\http\\client::addfile' => 
    array (
      0 => 'bool',
      'path' => 'string',
      'name' => 'string',
      'type=' => 'null|string',
      'filename=' => 'null|string',
      'offset=' => 'int',
      'length=' => 'int',
    ),
    'swoole\\coroutine\\http\\client::close' => 
    array (
      0 => 'bool',
    ),
    'swoole\\coroutine\\http\\client::execute' => 
    array (
      0 => 'bool',
      'path' => 'string',
    ),
    'swoole\\coroutine\\http\\client::get' => 
    array (
      0 => 'bool',
      'path' => 'string',
    ),
    'swoole\\coroutine\\http\\client::getdefer' => 
    array (
      0 => 'bool',
    ),
    'swoole\\coroutine\\http\\client::post' => 
    array (
      0 => 'bool',
      'path' => 'string',
      'data' => 'mixed',
    ),
    'swoole\\coroutine\\http\\client::recv' => 
    array (
      0 => 'Swoole\\WebSocket\\Frame|bool',
      'timeout=' => 'float',
    ),
    'swoole\\coroutine\\http\\client::set' => 
    array (
      0 => 'bool',
      'settings' => 'array<array-key, mixed>',
    ),
    'swoole\\coroutine\\http\\client::setcookies' => 
    array (
      0 => 'bool',
      'cookies' => 'array<array-key, mixed>',
    ),
    'swoole\\coroutine\\http\\client::setdata' => 
    array (
      0 => 'bool',
      'data' => 'array<array-key, mixed>|string',
    ),
    'swoole\\coroutine\\http\\client::setdefer' => 
    array (
      0 => 'bool',
      'defer=' => 'bool',
    ),
    'swoole\\coroutine\\http\\client::setheaders' => 
    array (
      0 => 'bool',
      'headers' => 'array<array-key, mixed>',
    ),
    'swoole\\coroutine\\http\\client::setmethod' => 
    array (
      0 => 'bool',
      'method' => 'string',
    ),
    'swoole\\event::add' => 
    array (
      0 => 'false|int',
      'fd' => 'int',
      'read_callback=' => 'callable|null',
      'write_callback=' => 'callable|null',
      'events=' => 'int',
    ),
    'swoole\\event::defer' => 
    array (
      0 => 'bool',
      'callback' => 'callable',
    ),
    'swoole\\event::del' => 
    array (
      0 => 'bool',
      'fd' => 'string',
    ),
    'swoole\\event::exit' => 
    array (
      0 => 'void',
    ),
    'swoole\\event::set' => 
    array (
      0 => 'bool',
      'fd' => 'int',
      'read_callback=' => 'callable|null',
      'write_callback=' => 'callable|null',
      'events=' => 'int',
    ),
    'swoole\\event::wait' => 
    array (
      0 => 'void',
    ),
    'swoole\\event::write' => 
    array (
      0 => 'bool',
      'fd' => 'string',
      'data' => 'string',
    ),
    'swoole\\http\\request::rawcontent' => 
    array (
      0 => 'string',
    ),
    'swoole\\http\\response::cookie' => 
    array (
      0 => 'bool',
      'name_or_object' => 'string',
      'value=' => 'string',
      'expires=' => 'int',
      'path=' => 'string',
      'domain=' => 'string',
      'secure=' => 'bool',
      'httponly=' => 'bool',
      'samesite=' => 'string',
      'priority=' => 'string',
      'partitioned=' => 'bool',
    ),
    'swoole\\http\\response::end' => 
    array (
      0 => 'bool',
      'content=' => 'null|string',
    ),
    'swoole\\http\\response::header' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'string',
      'format=' => 'bool',
    ),
    'swoole\\http\\response::initheader' => 
    array (
      0 => 'bool',
    ),
    'swoole\\http\\response::rawcookie' => 
    array (
      0 => 'bool',
      'name_or_object' => 'string',
      'value=' => 'string',
      'expires=' => 'int',
      'path=' => 'string',
      'domain=' => 'string',
      'secure=' => 'bool',
      'httponly=' => 'bool',
      'samesite=' => 'string',
      'priority=' => 'string',
      'partitioned=' => 'bool',
    ),
    'swoole\\http\\response::sendfile' => 
    array (
      0 => 'bool',
      'filename' => 'string',
      'offset=' => 'int',
      'length=' => 'int',
    ),
    'swoole\\http\\response::status' => 
    array (
      0 => 'bool',
      'http_code' => 'int',
      'reason=' => 'string',
    ),
    'swoole\\http\\response::write' => 
    array (
      0 => 'bool',
      'content' => 'string',
    ),
    'swoole\\http\\server::on' => 
    array (
      0 => 'bool',
      'event_name' => 'string',
      'callback' => 'callable',
    ),
    'swoole\\http\\server::start' => 
    array (
      0 => 'bool',
    ),
    'swoole\\lock::lock' => 
    array (
      0 => 'bool',
      'operation=' => 'int',
      'timeout=' => 'float',
    ),
    'swoole\\lock::unlock' => 
    array (
      0 => 'bool',
    ),
    'swoole\\process::__destruct' => 
    array (
      0 => 'void',
    ),
    'swoole\\process::alarm' => 
    array (
      0 => 'bool',
      'usec' => 'int',
      'type=' => 'int',
    ),
    'swoole\\process::close' => 
    array (
      0 => 'bool',
      'which=' => 'int',
    ),
    'swoole\\process::daemon' => 
    array (
      0 => 'bool',
      'nochdir=' => 'bool',
      'noclose=' => 'bool',
      'pipes=' => 'array<array-key, mixed>',
    ),
    'swoole\\process::exec' => 
    array (
      0 => 'bool',
      'exec_file' => 'string',
      'args' => 'array<array-key, mixed>',
    ),
    'swoole\\process::exit' => 
    array (
      0 => 'void',
      'exit_code=' => 'int',
    ),
    'swoole\\process::freequeue' => 
    array (
      0 => 'bool',
    ),
    'swoole\\process::kill' => 
    array (
      0 => 'bool',
      'pid' => 'int',
      'signal_no=' => 'int',
    ),
    'swoole\\process::name' => 
    array (
      0 => 'bool',
      'process_name' => 'string',
    ),
    'swoole\\process::pop' => 
    array (
      0 => 'false|string',
      'size=' => 'int',
    ),
    'swoole\\process::push' => 
    array (
      0 => 'bool',
      'data' => 'string',
    ),
    'swoole\\process::read' => 
    array (
      0 => 'string',
      'size=' => 'int',
    ),
    'swoole\\process::signal' => 
    array (
      0 => 'bool',
      'signal_no' => 'int',
      'callback=' => 'callable|null',
    ),
    'swoole\\process::start' => 
    array (
      0 => 'bool|int',
    ),
    'swoole\\process::statqueue' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'swoole\\process::usequeue' => 
    array (
      0 => 'bool',
      'key=' => 'int',
      'mode=' => 'int',
      'capacity=' => 'int',
    ),
    'swoole\\process::wait' => 
    array (
      0 => 'array<array-key, mixed>',
      'blocking=' => 'bool',
    ),
    'swoole\\process::write' => 
    array (
      0 => 'int',
      'data' => 'string',
    ),
    'swoole\\redis\\server::format' => 
    array (
      0 => 'false|string',
      'type' => 'int',
      'value=' => 'string',
    ),
    'swoole\\redis\\server::sethandler' => 
    array (
      0 => 'bool',
      'command' => 'string',
      'callback' => 'callable',
    ),
    'swoole\\redis\\server::start' => 
    array (
      0 => 'bool',
    ),
    'swoole\\server::addlistener' => 
    array (
      0 => 'Swoole\\Server\\Port|false',
      'host' => 'string',
      'port' => 'int',
      'sock_type' => 'int',
    ),
    'swoole\\server::addprocess' => 
    array (
      0 => 'false|int',
      'process' => 'Swoole\\Process',
    ),
    'swoole\\server::bind' => 
    array (
      0 => 'bool',
      'fd' => 'int',
      'uid' => 'int',
    ),
    'swoole\\server::close' => 
    array (
      0 => 'bool',
      'fd' => 'int',
      'reset=' => 'bool',
    ),
    'swoole\\server::confirm' => 
    array (
      0 => 'bool',
      'fd' => 'int',
    ),
    'swoole\\server::connection_info' => 
    array (
      0 => 'array<array-key, mixed>',
      'fd' => 'int',
      'reactor_id=' => 'int',
      'ignoreError=' => 'bool',
    ),
    'swoole\\server::connection_list' => 
    array (
      0 => 'array<array-key, mixed>',
      'start_fd=' => 'int',
      'find_count=' => 'int',
    ),
    'swoole\\server::exist' => 
    array (
      0 => 'bool',
      'fd' => 'int',
    ),
    'swoole\\server::finish' => 
    array (
      0 => 'bool',
      'data' => 'string',
    ),
    'swoole\\server::getclientinfo' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'fd' => 'int',
      'reactor_id=' => 'int',
      'ignoreError=' => 'bool',
    ),
    'swoole\\server::getclientlist' => 
    array (
      0 => 'array<array-key, mixed>',
      'start_fd=' => 'int',
      'find_count=' => 'int',
    ),
    'swoole\\server::getlasterror' => 
    array (
      0 => 'int',
    ),
    'swoole\\server::heartbeat' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'ifCloseConnection=' => 'bool',
    ),
    'swoole\\server::listen' => 
    array (
      0 => 'Swoole\\Server\\Port|false',
      'host' => 'string',
      'port' => 'int',
      'sock_type' => 'int',
    ),
    'swoole\\server::on' => 
    array (
      0 => 'bool',
      'event_name' => 'string',
      'callback' => 'callable',
    ),
    'swoole\\server::pause' => 
    array (
      0 => 'bool',
      'fd' => 'int',
    ),
    'swoole\\server::protect' => 
    array (
      0 => 'bool',
      'fd' => 'int',
      'is_protected=' => 'bool',
    ),
    'swoole\\server::reload' => 
    array (
      0 => 'bool',
      'only_reload_taskworker=' => 'bool',
    ),
    'swoole\\server::resume' => 
    array (
      0 => 'bool',
      'fd' => 'int',
    ),
    'swoole\\server::send' => 
    array (
      0 => 'bool',
      'fd' => 'int',
      'send_data' => 'string',
      'serverSocket=' => 'int',
    ),
    'swoole\\server::sendfile' => 
    array (
      0 => 'bool',
      'conn_fd' => 'int',
      'filename' => 'string',
      'offset=' => 'int',
      'length=' => 'int',
    ),
    'swoole\\server::sendmessage' => 
    array (
      0 => 'bool',
      'message' => 'int',
      'dst_worker_id' => 'int',
    ),
    'swoole\\server::sendto' => 
    array (
      0 => 'bool',
      'ip' => 'string',
      'port' => 'int',
      'send_data' => 'string',
      'server_socket=' => 'int',
    ),
    'swoole\\server::sendwait' => 
    array (
      0 => 'bool',
      'conn_fd' => 'int',
      'send_data' => 'string',
    ),
    'swoole\\server::set' => 
    array (
      0 => 'bool',
      'settings' => 'array<array-key, mixed>',
    ),
    'swoole\\server::shutdown' => 
    array (
      0 => 'bool',
    ),
    'swoole\\server::start' => 
    array (
      0 => 'bool',
    ),
    'swoole\\server::stats' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'swoole\\server::stop' => 
    array (
      0 => 'bool',
      'workerId=' => 'int',
    ),
    'swoole\\server::task' => 
    array (
      0 => 'false|int',
      'data' => 'string',
      'taskWorkerIndex=' => 'int',
      'finishCallback=' => 'callable|null',
    ),
    'swoole\\server::taskwait' => 
    array (
      0 => 'void',
      'data' => 'string',
      'timeout=' => 'float',
      'taskWorkerIndex=' => 'int',
    ),
    'swoole\\server::taskwaitmulti' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'tasks' => 'array<array-key, mixed>',
      'timeout=' => 'float',
    ),
    'swoole\\server\\port::__destruct' => 
    array (
      0 => 'void',
    ),
    'swoole\\server\\port::on' => 
    array (
      0 => 'bool',
      'event_name' => 'string',
      'callback' => 'callable',
    ),
    'swoole\\server\\port::set' => 
    array (
      0 => 'void',
      'settings' => 'array<array-key, mixed>',
    ),
    'swoole\\table::column' => 
    array (
      0 => 'bool',
      'name' => 'string',
      'type' => 'int',
      'size=' => 'int',
    ),
    'swoole\\table::count' => 
    array (
      0 => 'int',
    ),
    'swoole\\table::create' => 
    array (
      0 => 'bool',
    ),
    'swoole\\table::current' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'swoole\\table::decr' => 
    array (
      0 => 'float|int',
      'key' => 'string',
      'column' => 'string',
      'incrby=' => 'int',
    ),
    'swoole\\table::del' => 
    array (
      0 => 'bool',
      'key' => 'string',
    ),
    'swoole\\table::destroy' => 
    array (
      0 => 'bool',
    ),
    'swoole\\table::exist' => 
    array (
      0 => 'bool',
      'key' => 'string',
    ),
    'swoole\\table::get' => 
    array (
      0 => 'int',
      'key' => 'string',
      'field=' => 'null|string',
    ),
    'swoole\\table::incr' => 
    array (
      0 => 'float|int',
      'key' => 'string',
      'column' => 'string',
      'incrby=' => 'int',
    ),
    'swoole\\table::key' => 
    array (
      0 => 'string',
    ),
    'swoole\\table::next' => 
    array (
      0 => 'void',
    ),
    'swoole\\table::rewind' => 
    array (
      0 => 'void',
    ),
    'swoole\\table::set' => 
    array (
      0 => 'bool',
      'key' => 'string',
      'value' => 'array<array-key, mixed>',
    ),
    'swoole\\table::valid' => 
    array (
      0 => 'bool',
    ),
    'swoole\\timer::after' => 
    array (
      0 => 'false|int',
      'ms' => 'int',
      'callback' => 'callable',
      '...params=' => 'mixed',
    ),
    'swoole\\timer::clear' => 
    array (
      0 => 'bool',
      'timer_id' => 'int',
    ),
    'swoole\\timer::exists' => 
    array (
      0 => 'bool',
      'timer_id' => 'int',
    ),
    'swoole\\timer::tick' => 
    array (
      0 => 'false|int',
      'ms' => 'int',
      'callback' => 'callable',
      '...params=' => 'string',
    ),
    'swoole\\websocket\\server::exist' => 
    array (
      0 => 'bool',
      'fd' => 'int',
    ),
    'swoole\\websocket\\server::on' => 
    array (
      0 => 'bool',
      'event_name' => 'string',
      'callback' => 'callable',
    ),
    'swoole\\websocket\\server::pack' => 
    array (
      0 => 'string',
      'data' => 'string',
      'opcode=' => 'int',
      'flags=' => 'int',
    ),
    'swoole\\websocket\\server::push' => 
    array (
      0 => 'bool',
      'fd' => 'int',
      'data' => 'string',
      'opcode=' => 'int',
      'flags=' => 'int',
    ),
    'swoole\\websocket\\server::unpack' => 
    array (
      0 => 'Swoole\\WebSocket\\Frame',
      'data' => 'string',
    ),
    'swoole_async_set' => 
    array (
      0 => 'bool',
      'settings' => 'array<array-key, mixed>',
    ),
    'swoole_client_select' => 
    array (
      0 => 'int',
      '&read' => 'array<array-key, mixed>|null',
      '&write' => 'array<array-key, mixed>|null',
      '&except' => 'array<array-key, mixed>|null',
      'timeout=' => 'float|null',
    ),
    'swoole_cpu_num' => 
    array (
      0 => 'int',
    ),
    'swoole_errno' => 
    array (
      0 => 'int',
    ),
    'swoole_event_add' => 
    array (
      0 => 'int',
      'fd' => 'int',
      'read_callback=' => 'callable|null',
      'write_callback=' => 'callable|null',
      'events=' => 'int',
    ),
    'swoole_event_defer' => 
    array (
      0 => 'bool',
      'callback' => 'callable',
    ),
    'swoole_event_del' => 
    array (
      0 => 'bool',
      'fd' => 'int',
    ),
    'swoole_event_exit' => 
    array (
      0 => 'void',
    ),
    'swoole_event_set' => 
    array (
      0 => 'bool',
      'fd' => 'int',
      'read_callback=' => 'callable|null',
      'write_callback=' => 'callable|null',
      'events=' => 'int',
    ),
    'swoole_event_wait' => 
    array (
      0 => 'void',
    ),
    'swoole_event_write' => 
    array (
      0 => 'bool',
      'fd' => 'int',
      'data' => 'string',
    ),
    'swoole_get_local_ip' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'swoole_last_error' => 
    array (
      0 => 'int',
    ),
    'swoole_select' => 
    array (
      0 => 'int',
      '&read' => 'array<array-key, mixed>|null',
      '&write' => 'array<array-key, mixed>|null',
      '&except' => 'array<array-key, mixed>|null',
      'timeout=' => 'float|null',
    ),
    'swoole_set_process_name' => 
    array (
      0 => 'bool',
      'process_name' => 'string',
    ),
    'swoole_strerror' => 
    array (
      0 => 'string',
      'errno' => 'int',
      'error_type=' => 'int',
    ),
    'swoole_timer_after' => 
    array (
      0 => 'int',
      'ms' => 'int',
      'callback' => 'callable',
    ),
    'swoole_timer_exists' => 
    array (
      0 => 'bool',
      'timer_id' => 'int',
    ),
    'swoole_timer_tick' => 
    array (
      0 => 'int',
      'ms' => 'int',
      'callback' => 'callable',
    ),
    'swoole_version' => 
    array (
      0 => 'string',
    ),
    'zmqcontext::__construct' => 
    array (
      0 => 'void',
      'io_threads=' => 'int',
      'persistent=' => 'bool',
    ),
    'zmqcontext::getopt' => 
    array (
      0 => 'int|string',
      'option' => 'string',
    ),
    'zmqcontext::getsocket' => 
    array (
      0 => 'ZMQSocket',
      'type' => 'int',
      'dsn' => 'string',
      'on_new_socket=' => 'callable',
    ),
    'zmqcontext::ispersistent' => 
    array (
      0 => 'bool',
    ),
    'zmqcontext::setopt' => 
    array (
      0 => 'ZMQContext',
      'option' => 'int',
      'value' => 'mixed',
    ),
    'zmqdevice::getidletimeout' => 
    array (
      0 => 'ZMQDevice',
    ),
    'zmqdevice::gettimertimeout' => 
    array (
      0 => 'ZMQDevice',
    ),
    'zmqdevice::run' => 
    array (
      0 => 'void',
    ),
    'zmqdevice::setidlecallback' => 
    array (
      0 => 'ZMQDevice',
      'idle_callback' => 'callable',
      'timeout' => 'int',
      'user_data=' => 'mixed',
    ),
    'zmqdevice::setidletimeout' => 
    array (
      0 => 'ZMQDevice',
      'timeout' => 'int',
    ),
    'zmqdevice::settimercallback' => 
    array (
      0 => 'ZMQDevice',
      'idle_callback' => 'callable',
      'timeout' => 'int',
      'user_data=' => 'mixed',
    ),
    'zmqdevice::settimertimeout' => 
    array (
      0 => 'ZMQDevice',
      'timeout' => 'int',
    ),
    'zmqpoll::add' => 
    array (
      0 => 'string',
      'entry' => 'mixed',
      'type' => 'int',
    ),
    'zmqpoll::clear' => 
    array (
      0 => 'ZMQPoll',
    ),
    'zmqpoll::count' => 
    array (
      0 => 'int',
    ),
    'zmqpoll::getlasterrors' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'zmqpoll::poll' => 
    array (
      0 => 'int',
      '&w readable' => 'array<array-key, mixed>',
      '&w writable' => 'array<array-key, mixed>',
      'timeout=' => 'int',
    ),
    'zmqpoll::remove' => 
    array (
      0 => 'bool',
      'remove' => 'mixed',
    ),
    'zmqsocket::__construct' => 
    array (
      0 => 'void',
      'ZMQContext' => 'ZMQContext',
      'type' => 'int',
      'persistent_id=' => 'string',
      'on_new_socket=' => 'callable',
    ),
    'zmqsocket::bind' => 
    array (
      0 => 'ZMQSocket',
      'dsn' => 'string',
      'force=' => 'bool',
    ),
    'zmqsocket::connect' => 
    array (
      0 => 'ZMQSocket',
      'dsn' => 'string',
      'force=' => 'bool',
    ),
    'zmqsocket::disconnect' => 
    array (
      0 => 'ZMQSocket',
      'dsn' => 'string',
    ),
    'zmqsocket::getendpoints' => 
    array (
      0 => 'array<array-key, mixed>',
    ),
    'zmqsocket::getpersistentid' => 
    array (
      0 => 'null|string',
    ),
    'zmqsocket::getsockettype' => 
    array (
      0 => 'int',
    ),
    'zmqsocket::getsockopt' => 
    array (
      0 => 'int|string',
      'key' => 'string',
    ),
    'zmqsocket::ispersistent' => 
    array (
      0 => 'bool',
    ),
    'zmqsocket::recv' => 
    array (
      0 => 'string',
      'mode=' => 'int',
    ),
    'zmqsocket::recvmulti' => 
    array (
      0 => 'array<array-key, string>',
      'mode=' => 'int',
    ),
    'zmqsocket::send' => 
    array (
      0 => 'ZMQSocket',
      'message' => 'array<array-key, mixed>',
      'mode=' => 'int',
    ),
    'zmqsocket::sendmulti' => 
    array (
      0 => 'ZMQSocket',
      'message' => 'array<array-key, mixed>',
      'mode=' => 'int',
    ),
    'zmqsocket::setsockopt' => 
    array (
      0 => 'ZMQSocket',
      'key' => 'int',
      'value' => 'mixed',
    ),
    'zmqsocket::unbind' => 
    array (
      0 => 'ZMQSocket',
      'dsn' => 'string',
    ),
    'zookeeper::addauth' => 
    array (
      0 => 'bool',
      'scheme' => 'string',
      'cert' => 'string',
      'completion_cb=' => 'callable',
    ),
    'zookeeper::close' => 
    array (
      0 => 'void',
    ),
    'zookeeper::connect' => 
    array (
      0 => 'void',
      'host' => 'string',
      'watcher_cb=' => 'callable',
      'recv_timeout=' => 'int',
    ),
    'zookeeper::create' => 
    array (
      0 => 'string',
      'path' => 'string',
      'value=' => 'string',
      'acl=' => 'array<array-key, mixed>',
      'flags=' => 'int',
    ),
    'zookeeper::delete' => 
    array (
      0 => 'bool',
      'path' => 'string',
      'version=' => 'int',
    ),
    'zookeeper::exists' => 
    array (
      0 => 'bool',
      'path' => 'string',
      'watcher_cb=' => 'callable',
    ),
    'zookeeper::get' => 
    array (
      0 => 'string',
      'path' => 'string',
      'watcher_cb=' => 'callable',
      '&stat_info=' => 'array<array-key, mixed>',
      'max_size=' => 'int',
    ),
    'zookeeper::getacl' => 
    array (
      0 => 'array<array-key, mixed>',
      'path' => 'string',
    ),
    'zookeeper::getchildren' => 
    array (
      0 => 'array<array-key, mixed>|false',
      'path' => 'string',
      'watcher_cb=' => 'callable',
    ),
    'zookeeper::getclientid' => 
    array (
      0 => 'int',
    ),
    'zookeeper::getconfig' => 
    array (
      0 => 'ZookeeperConfig',
    ),
    'zookeeper::getrecvtimeout' => 
    array (
      0 => 'int',
    ),
    'zookeeper::getstate' => 
    array (
      0 => 'int',
    ),
    'zookeeper::isrecoverable' => 
    array (
      0 => 'bool',
    ),
    'zookeeper::set' => 
    array (
      0 => 'bool',
      'path' => 'string',
      'value=' => 'string',
      'version=' => 'int',
      '&stat_info=' => 'array<array-key, mixed>',
    ),
    'zookeeper::setacl' => 
    array (
      0 => 'bool',
      'path' => 'string',
      'version' => 'int',
      'acl' => 'array<array-key, mixed>',
    ),
    'zookeeper::setdebuglevel' => 
    array (
      0 => 'bool',
      'level' => 'int',
    ),
    'zookeeper::setdeterministicconnorder' => 
    array (
      0 => 'bool',
      'trueOrFalse' => 'bool',
    ),
    'zookeeper::setlogstream' => 
    array (
      0 => 'bool',
      'stream' => 'resource',
    ),
    'zookeeper::setwatcher' => 
    array (
      0 => 'bool',
      'watcher_cb' => 'callable',
    ),
    'zookeeper_dispatch' => 
    array (
      0 => 'void',
    ),
    'zookeeperconfig::add' => 
    array (
      0 => 'void',
      'members' => 'string',
      'version=' => 'int',
      '&stat_info=' => 'array<array-key, mixed>',
    ),
    'zookeeperconfig::get' => 
    array (
      0 => 'string',
      'watcher_cb' => 'callable',
      '&stat_info' => 'array<array-key, mixed>',
    ),
    'zookeeperconfig::remove' => 
    array (
      0 => 'void',
      'members' => 'string',
      'version=' => 'int',
      '&stat_info=' => 'array<array-key, mixed>',
    ),
    'zookeeperconfig::set' => 
    array (
      0 => 'void',
      'members' => 'string',
      'version=' => 'int',
      '&stat_info=' => 'array<array-key, mixed>',
    ),
  ),
);