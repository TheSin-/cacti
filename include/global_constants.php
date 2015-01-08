<?php
/*
 +-------------------------------------------------------------------------+
 | Copyright (C) 2004-2015 The Cacti Group                                 |
 |                                                                         |
 | This program is free software; you can redistribute it and/or           |
 | modify it under the terms of the GNU General Public License             |
 | as published by the Free Software Foundation; either version 2          |
 | of the License, or (at your option) any later version.                  |
 |                                                                         |
 | This program is distributed in the hope that it will be useful,         |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
 | GNU General Public License for more details.                            |
 +-------------------------------------------------------------------------+
 | Cacti: The Complete RRDTool-based Graphing Solution                     |
 +-------------------------------------------------------------------------+
 | This code is designed, written, and maintained by the Cacti Group. See  |
 | about.php and/or the AUTHORS file for specific developer information.   |
 +-------------------------------------------------------------------------+
 | http://www.cacti.net/                                                   |
 +-------------------------------------------------------------------------+
*/

define('CACTI_ESCAPE_CHARACTER', '"');
define('COPYRIGHT_YEARS', 'Copyright (c) 2004-2015 - The Cacti Group, Inc.');
define('COPYRIGHT_YEARS_SHORT', '(c) 2004-2015 - The Cacti Group');

define('HOST_GROUPING_GRAPH_TEMPLATE', 1);
define('HOST_GROUPING_DATA_QUERY_INDEX', 2);

define('TREE_ORDERING_INHERIT', 0);
define('TREE_ORDERING_NONE', 1);
define('TREE_ORDERING_ALPHABETIC', 2);
define('TREE_ORDERING_NUMERIC', 3);
define('TREE_ORDERING_NATURAL', 4);

define('TREE_ITEM_TYPE_HEADER', 1);
define('TREE_ITEM_TYPE_GRAPH', 2);
define('TREE_ITEM_TYPE_HOST', 3);

define('RRDTOOL_OUTPUT_NULL', 0);
define('RRDTOOL_OUTPUT_STDOUT', 1);
define('RRDTOOL_OUTPUT_STDERR', 2);
define('RRDTOOL_OUTPUT_GRAPH_DATA', 3);

define('DATA_QUERY_AUTOINDEX_NONE', 0);
define('DATA_QUERY_AUTOINDEX_BACKWARDS_UPTIME', 1);
define('DATA_QUERY_AUTOINDEX_INDEX_NUM_CHANGE', 2);
define('DATA_QUERY_AUTOINDEX_FIELD_VERIFICATION', 3);

define('DATA_INPUT_TYPE_SCRIPT', 1);
define('DATA_INPUT_TYPE_SNMP', 2);
define('DATA_INPUT_TYPE_SNMP_QUERY', 3);
define('DATA_INPUT_TYPE_SCRIPT_QUERY', 4);
define('DATA_INPUT_TYPE_PHP_SCRIPT_SERVER', 5);
define('DATA_INPUT_TYPE_QUERY_SCRIPT_SERVER', 6);

define('GRAPH_ITEM_TYPE_COMMENT',            1);
define('GRAPH_ITEM_TYPE_HRULE',              2);
define('GRAPH_ITEM_TYPE_VRULE',              3);
define('GRAPH_ITEM_TYPE_LINE1',              4);
define('GRAPH_ITEM_TYPE_LINE2',              5);
define('GRAPH_ITEM_TYPE_LINE3',              6);
define('GRAPH_ITEM_TYPE_AREA',               7);
define('GRAPH_ITEM_TYPE_STACK',              8);
define('GRAPH_ITEM_TYPE_GPRINT',             9);
define('GRAPH_ITEM_TYPE_LEGEND',            10);
define('GRAPH_ITEM_TYPE_LINE1_LEGEND_CAX',  11);
define('GRAPH_ITEM_TYPE_LINE1_LEGEND_CAXM', 12);
define('GRAPH_ITEM_TYPE_LINE2_LEGEND_CAX',  13);
define('GRAPH_ITEM_TYPE_LINE2_LEGEND_CAXM', 14);
define('GRAPH_ITEM_TYPE_LINE3_LEGEND_CAX',  15);
define('GRAPH_ITEM_TYPE_LINE3_LEGEND_CAXM', 16);
define('GRAPH_ITEM_TYPE_AREA_LEGEND_CAX',   17);
define('GRAPH_ITEM_TYPE_AREA_LEGEND_CAXM',  18);
define('GRAPH_ITEM_TYPE_STACK_LEGEND_CAX',  19);
define('GRAPH_ITEM_TYPE_STACK_LEGEND_CAXM', 20);

/* used both for polling and reindexing */
define('POLLER_ACTION_SNMP', 0);
define('POLLER_ACTION_SCRIPT', 1);
define('POLLER_ACTION_SCRIPT_PHP', 2);
/* used for reindexing only:
 * in case we do not have OID_NUM_INDEXES|ARG_NUM_INDEXES
 * we simply use the OID_INDEX|ARG_INDEX and count number of indexes found
 * so this is more of a REINDEX_ACTION_... thingy
 */
define('POLLER_ACTION_SNMP_COUNT', 10);
define('POLLER_ACTION_SCRIPT_COUNT', 11);
define('POLLER_ACTION_SCRIPT_PHP_COUNT', 12);

define('POLLER_COMMAND_REINDEX', 1);
define('POLLER_COMMAND_RRDPURGE', 2);

define('POLLER_VERBOSITY_NONE', 1);
define('POLLER_VERBOSITY_LOW', 2);
define('POLLER_VERBOSITY_MEDIUM', 3);
define('POLLER_VERBOSITY_HIGH', 4);
define('POLLER_VERBOSITY_DEBUG', 5);
define('POLLER_VERBOSITY_DEVDBG', 6);

define('AVAIL_NONE', 0);
define('AVAIL_SNMP_AND_PING', 1);
define('AVAIL_SNMP', 2);
define('AVAIL_PING', 3);
define('AVAIL_SNMP_OR_PING', 4);
define('AVAIL_SNMP_GET_SYSDESC', 5);
define('AVAIL_SNMP_GET_NEXT', 6);

define('PING_ICMP', 1);
define('PING_UDP', 2);
define('PING_TCP', 3);

define('HOST_UNKNOWN', 0);
define('HOST_DOWN', 1);
define('HOST_RECOVERING', 2);
define('HOST_UP', 3);
define('HOST_ERROR', 4);

define('GT_CUSTOM', 0);
define('GT_LAST_HALF_HOUR', 1);
define('GT_LAST_HOUR', 2);
define('GT_LAST_2_HOURS', 3);
define('GT_LAST_4_HOURS', 4);
define('GT_LAST_6_HOURS', 5);
define('GT_LAST_12_HOURS', 6);
define('GT_LAST_DAY', 7);
define('GT_LAST_2_DAYS', 8);
define('GT_LAST_3_DAYS', 9);
define('GT_LAST_4_DAYS', 10);
define('GT_LAST_WEEK', 11);
define('GT_LAST_2_WEEKS', 12);
define('GT_LAST_MONTH', 13);
define('GT_LAST_2_MONTHS', 14);
define('GT_LAST_3_MONTHS', 15);
define('GT_LAST_4_MONTHS', 16);
define('GT_LAST_6_MONTHS', 17);
define('GT_LAST_YEAR', 18);
define('GT_LAST_2_YEARS', 19);
define('GT_DAY_SHIFT', 20);
define('GT_THIS_DAY', 21);
define('GT_THIS_WEEK', 22);
define('GT_THIS_MONTH', 23);
define('GT_THIS_YEAR', 24);
define('GT_PREV_DAY', 25);
define('GT_PREV_WEEK', 26);
define('GT_PREV_MONTH', 27);
define('GT_PREV_YEAR', 28);

define('DEFAULT_TIMESPAN', 86400);

# graph timeshifts
define('GTS_CUSTOM', 0);
define('GTS_HALF_HOUR', 1);
define('GTS_1_HOUR', 2);
define('GTS_2_HOURS', 3);
define('GTS_4_HOURS', 4);
define('GTS_6_HOURS', 5);
define('GTS_12_HOURS', 6);
define('GTS_1_DAY', 7);
define('GTS_2_DAYS', 8);
define('GTS_3_DAYS', 9);
define('GTS_4_DAYS', 10);
define('GTS_1_WEEK', 11);
define('GTS_2_WEEKS', 12);
define('GTS_1_MONTH', 13);
define('GTS_2_MONTHS', 14);
define('GTS_3_MONTHS', 15);
define('GTS_4_MONTHS', 16);
define('GTS_6_MONTHS', 17);
define('GTS_1_YEAR', 18);
define('GTS_2_YEARS', 19);

define('DEFAULT_TIMESHIFT', 86400);

# weekdays according to date('w') builtin function
define('WD_SUNDAY', 	date('w',strtotime('sunday')));
define('WD_MONDAY', 	date('w',strtotime('monday')));
define('WD_TUESDAY', 	date('w',strtotime('tuesday')));
define('WD_WEDNESDAY', 	date('w',strtotime('wednesday')));
define('WD_THURSDAY', 	date('w',strtotime('thursday')));
define('WD_FRIDAY', 	date('w',strtotime('friday')));
define('WD_SATURDAY', 	date('w',strtotime('saturday')));

define('GD_MO_D_Y', 0);
define('GD_MN_D_Y', 1);
define('GD_D_MO_Y', 2);
define('GD_D_MN_Y', 3);
define('GD_Y_MO_D', 4);
define('GD_Y_MN_D', 5);

define('GDC_HYPHEN', 0);
define('GDC_SLASH', 1);

define('SNMP_POLLER', 0);
define('SNMP_CMDPHP', 1);
define('SNMP_WEBUI', 2);

define('OPER_MODE_NATIVE', 0);
define('OPER_MODE_RESKIN', 1);
define('OPER_MODE_IFRAME_NONAV', 2);
define('OPER_MODE_NOTABS', 3);

define('BOOST_TIMER_START', 1);
define('BOOST_TIMER_END', 0);
define('BOOST_TIMER_STOP', BOOST_TIMER_END);
define('BOOST_TIMER_TOTAL', 2);
define('BOOST_TIMER_CYCLES', 3);
define('BOOST_TIMER_OVERHEAD_MULTIPLIER', 20000);

define('SNMPAGENT_EVENT_SEVERITY_LOW', 1);
define('SNMPAGENT_EVENT_SEVERITY_MEDIUM', 2);
define('SNMPAGENT_EVENT_SEVERITY_HIGH', 3);
define('SNMPAGENT_EVENT_SEVERITY_CRITICAL', 4);

define('CLOG_PERM_ADMIN', 0);
define('CLOG_PERM_USER',  1);
define('CLOG_PERM_NONE',  2);

define('CHARS_PER_TIER', 3);
define('MAX_TREE_DEPTH', 30);
define('SORT_TYPE_TREE', 1);
define('SORT_TYPE_TREE_ITEM', 2);

define('REPORTS_SEND_NOW', 1);
define('REPORTS_DUPLICATE', 2);
define('REPORTS_ENABLE', 3);
define('REPORTS_DISABLE', 4);
define('REPORTS_DELETE', 99);
define('REPORTS_OWN', 100);

define('REPORTS_TYPE_INLINE_PNG', 1);
define('REPORTS_TYPE_INLINE_JPG', 2);
define('REPORTS_TYPE_INLINE_GIF', 3);
define('REPORTS_TYPE_ATTACH_PNG', 11);
define('REPORTS_TYPE_ATTACH_JPG', 12);
define('REPORTS_TYPE_ATTACH_GIF', 13);
define('REPORTS_TYPE_ATTACH_PDF', 14);
define('REPORTS_TYPE_INLINE_PNG_LN', 91);
define('REPORTS_TYPE_INLINE_JPG_LN', 92);
define('REPORTS_TYPE_INLINE_GIF_LN', 93);

define('REPORTS_ITEM_GRAPH', 1);
define('REPORTS_ITEM_TEXT', 2);
define('REPORTS_ITEM_TREE', 3);
define('REPORTS_ITEM_HR', 4);

define('REPORTS_ALIGN_LEFT', 1);
define('REPORTS_ALIGN_CENTER', 2);
define('REPORTS_ALIGN_RIGHT', 3);
define('REPORTS_SCHED_INTVL_MINUTE', 10);
define('REPORTS_SCHED_INTVL_HOUR', 11);

define('REPORTS_SCHED_INTVL_DAY', 1);
define('REPORTS_SCHED_INTVL_WEEK', 2);
define('REPORTS_SCHED_INTVL_MONTH_DAY', 3);
define('REPORTS_SCHED_INTVL_MONTH_WEEKDAY', 4);
define('REPORTS_SCHED_INTVL_YEAR', 5);

define('REPORTS_SCHED_COUNT', 1);
define('REPORTS_SCHED_OFFSET', 0);

define('REPORTS_GRAPH_LINK', 0);

define('REPORTS_FONT_SIZE', 10);
define('REPORTS_HOST_NONE', 0);
define('REPORTS_TREE_NONE', 0);
define('REPORTS_TIMESPAN_DEFAULT', GT_LAST_DAY);

define('REPORTS_EXTENSION_GD', 'gd');
define('REPORTS_DEBUG', read_config_option('reports_log_verbosity'), true);

define('REPORTS_OUTPUT_STDOUT', 1);
define('REPORTS_OUTPUT_EMAIL',  2);

define('REPORTS_DEFAULT_MAX_SIZE', 10485760);
