<?php

namespace Safe;

use Safe\Exceptions\UodbcException;

/**
 * Toggles autocommit behaviour.
 * 
 * By default, auto-commit is on for a connection.  Disabling
 * auto-commit is equivalent with starting a transaction.
 * 
 * @param \Odbc\Connection $odbc The ODBC connection object,
 * see odbc_connect for details.
 * @param  $enable If enable is TRUE, auto-commit is enabled, if
 * it is FALSE auto-commit is disabled.
 * If NULL is passed, this function returns the auto-commit status for
 * odbc.
 * @return mixed With a NULL enable parameter, this function returns
 * auto-commit status for odbc. Non-zero is
 * returned if auto-commit is on, 0 if it is off, or FALSE if an error
 * occurs.
 * 
 * If enable is non-null, this function returns TRUE on
 * success.
 * @throws UodbcException
 * 
 */
function odbc_autocommit(\Odbc\Connection $odbc,  $enable = null)
{
    error_clear_last();
    $result = \odbc_autocommit($odbc, $enable);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Commits all pending transactions on the connection.
 * 
 * @param \Odbc\Connection $odbc The ODBC connection object,
 * see odbc_connect for details.
 * @throws UodbcException
 * 
 */
function odbc_commit(\Odbc\Connection $odbc): void
{
    error_clear_last();
    $result = \odbc_commit($odbc);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
}


/**
 * 
 * 
 * @param string $dsn The database source name for the connection. Alternatively, a
 * DSN-less connection string can be used.
 * @param string $user The username.
 * This parameter is ignored if dsn contains uid.
 * To connect without specifying a user,
 * use NULL.
 * @param string $password The password.
 * This parameter is ignored if dsn contains pwd.
 * To connect without specifying a password,
 * use NULL.
 * @param int $cursor_option This sets the type of cursor to be used
 * for this connection. This parameter is not normally needed, but
 * can be useful for working around problems with some ODBC drivers.
 * 
 * 
 * 
 * 
 * SQL_CUR_USE_IF_NEEDED
 * 
 * 
 * 
 * 
 * SQL_CUR_USE_ODBC
 * 
 * 
 * 
 * 
 * SQL_CUR_USE_DRIVER
 * 
 * 
 * 
 * @return resource Returns an ODBC connection.
 * @throws UodbcException
 * 
 */
function odbc_connect(string $dsn, string $user = null, string $password = null, int $cursor_option = SQL_CUR_USE_DRIVER)
{
    error_clear_last();
    $result = \odbc_connect($dsn, $user, $password, $cursor_option);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Gets the cursorname for the given result_id.
 * 
 * @param \Odbc\Result $statement The ODBC result object.
 * @return string Returns the cursor name, as a string.
 * @throws UodbcException
 * 
 */
function odbc_cursor(\Odbc\Result $statement): string
{
    error_clear_last();
    $result = \odbc_cursor($statement);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * This function will return the list of available DSN (after calling it
 * several times).
 * 
 * @param \Odbc\Connection $odbc The ODBC connection object,
 * see odbc_connect for details.
 * @param int $fetch_type The fetch_type can be one of two constant types:
 * SQL_FETCH_FIRST, SQL_FETCH_NEXT.
 * Use SQL_FETCH_FIRST the first time this function is
 * called, thereafter use the SQL_FETCH_NEXT.
 * @return array Returns FALSE on error, an array upon success, and NULL after fetching
 * the last available DSN.
 * @throws UodbcException
 * 
 */
function odbc_data_source(\Odbc\Connection $odbc, int $fetch_type): array
{
    error_clear_last();
    $result = \odbc_data_source($odbc, $fetch_type);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Sends an SQL statement to the database server.
 * 
 * @param \Odbc\Connection $odbc The ODBC connection object,
 * see odbc_connect for details.
 * @param string $query The SQL statement.
 * @return resource Returns an ODBC result object if the SQL command was executed
 * successfully.
 * @throws UodbcException
 * 
 */
function odbc_exec(\Odbc\Connection $odbc, string $query)
{
    error_clear_last();
    $result = \odbc_exec($odbc, $query);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Executes a statement prepared with odbc_prepare.
 * 
 * @param \Odbc\Result $statement The ODBC result object from odbc_prepare.
 * @param array $params Parameters in params will be
 * substituted for placeholders in the prepared statement in order.
 * Elements of this array will be converted to strings by calling this
 * function.
 * 
 * Any parameters in params which
 * start and end with single quotes will be taken as the name of a
 * file to read and send to the database server as the data for the
 * appropriate placeholder.
 * @throws UodbcException
 * 
 */
function odbc_execute(\Odbc\Result $statement, array $params = []): void
{
    error_clear_last();
    $result = \odbc_execute($statement, $params);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
}


/**
 * Fetch one result row into array.
 * 
 * @param \Odbc\Result $statement The ODBC result object.
 * @param array $array The result array
 * that can be of any type since it will be converted to type
 * array. The array will contain the column values starting at array
 * index 0.
 * @param  $row The row number.
 * @return int Returns the number of columns in the result;
 * FALSE on error.
 * @throws UodbcException
 * 
 */
function odbc_fetch_into(\Odbc\Result $statement, array &$array,  $row = null): int
{
    error_clear_last();
    $result = \odbc_fetch_into($statement, $array, $row);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Gets the length of the field referenced by number in the given result
 * identifier.
 * 
 * @param \Odbc\Result $statement The ODBC result object.
 * @param int $field The field number. Field numbering starts at 1.
 * @return int Returns the field length.
 * @throws UodbcException
 * 
 */
function odbc_field_len(\Odbc\Result $statement, int $field): int
{
    error_clear_last();
    $result = \odbc_field_len($statement, $field);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Gets the name of the field occupying the given column number in the given
 * result object.
 * 
 * @param \Odbc\Result $statement The ODBC result object.
 * @param int $field The field number. Field numbering starts at 1.
 * @return string Returns the field name as a string.
 * @throws UodbcException
 * 
 */
function odbc_field_name(\Odbc\Result $statement, int $field): string
{
    error_clear_last();
    $result = \odbc_field_name($statement, $field);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Gets the number of the column slot that corresponds to the named field in
 * the given result object.
 * 
 * @param \Odbc\Result $statement The ODBC result object.
 * @param string $field The field name.
 * @return int Returns the field number as a integer.
 * Field numbering starts at 1.
 * @throws UodbcException
 * 
 */
function odbc_field_num(\Odbc\Result $statement, string $field): int
{
    error_clear_last();
    $result = \odbc_field_num($statement, $field);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Gets the scale of the field referenced by number in the given result
 * identifier.
 * 
 * @param \Odbc\Result $statement The ODBC result object.
 * @param int $field The field number. Field numbering starts at 1.
 * @return int Returns the field scale as a integer.
 * @throws UodbcException
 * 
 */
function odbc_field_scale(\Odbc\Result $statement, int $field): int
{
    error_clear_last();
    $result = \odbc_field_scale($statement, $field);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Gets the SQL type of the field referenced by number in the given result
 * identifier.
 * 
 * @param \Odbc\Result $statement The ODBC result object.
 * @param int $field The field number. Field numbering starts at 1.
 * @return string Returns the field type as a string.
 * @throws UodbcException
 * 
 */
function odbc_field_type(\Odbc\Result $statement, int $field): string
{
    error_clear_last();
    $result = \odbc_field_type($statement, $field);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Opens a persistent database connection.
 * 
 * This function is much like
 * odbc_connect, except that the connection is
 * not really closed when the script has finished.  Future requests
 * for a connection with the same dsn,
 * user, password
 * combination (via odbc_connect and
 * odbc_pconnect) can reuse the persistent
 * connection.
 * 
 * @param string $dsn 
 * @param string $user 
 * @param string $password 
 * @param int $cursor_option 
 * @return resource Returns an ODBC connection.
 * @throws UodbcException
 * 
 */
function odbc_pconnect(string $dsn, string $user = null, string $password = null, int $cursor_option = SQL_CUR_USE_DRIVER)
{
    error_clear_last();
    $result = \odbc_pconnect($dsn, $user, $password, $cursor_option);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Prepares a statement for execution. The ODBC result object can be used
 * later to execute the statement with odbc_execute.
 * 
 * Some databases (such as IBM DB2, MS SQL Server, and Oracle) support
 * stored procedures that accept parameters of type IN, INOUT, and OUT as
 * defined by the ODBC specification.  However, the Unified ODBC driver
 * currently only supports parameters of type IN to stored procedures.
 * 
 * @param \Odbc\Connection $odbc The ODBC connection object,
 * see odbc_connect for details.
 * @param string $query The query string statement being prepared.
 * @return resource Returns an ODBC result object if the SQL command was prepared
 * successfully.
 * @throws UodbcException
 * 
 */
function odbc_prepare(\Odbc\Connection $odbc, string $query)
{
    error_clear_last();
    $result = \odbc_prepare($odbc, $query);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Lists all procedures in the requested range.
 * 
 * @param \Odbc\Connection $odbc The ODBC connection object,
 * see odbc_connect for details.
 * @param  $catalog The catalog ('qualifier' in ODBC 2 parlance).
 * @param  $schema The schema ('owner' in ODBC 2 parlance).
 * This parameter accepts the following search patterns:
 * % to match zero or more characters,
 * and _ to match a single character.
 * @param  $procedure The name.
 * This parameter accepts the following search patterns:
 * % to match zero or more characters,
 * and _ to match a single character.
 * @return resource Returns an ODBC result object containing the information.
 * 
 * The result set has the following columns:
 * 
 * PROCEDURE_CAT
 * PROCEDURE_SCHEM
 * PROCEDURE_NAME
 * NUM_INPUT_PARAMS
 * NUM_OUTPUT_PARAMS
 * NUM_RESULT_SETS
 * REMARKS
 * PROCEDURE_TYPE
 * 
 * Drivers can report additional columns.
 * @throws UodbcException
 * 
 */
function odbc_procedures(\Odbc\Connection $odbc,  $catalog = null,  $schema = null,  $procedure = null)
{
    error_clear_last();
    $result = \odbc_procedures($odbc, $catalog, $schema, $procedure);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Prints all rows from a result object produced by
 * odbc_exec. The result is printed in HTML table format.
 * The data is not escaped.
 * 
 * This function is not supposed to be used in production environments; it is
 * merely meant for development purposes, to get a result set quickly rendered.
 * 
 * @param \Odbc\Result $statement The ODBC result object.
 * @param string $format Additional overall table formatting.
 * @return int Returns the number of rows in the result.
 * @throws UodbcException
 * 
 */
function odbc_result_all(\Odbc\Result $statement, string $format = ""): int
{
    error_clear_last();
    $result = \odbc_result_all($statement, $format);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Get result data
 * 
 * @param \Odbc\Result $statement The ODBC result object.
 * @param mixed $field The field name being retrieved. It can either be an integer containing
 * the column number of the field you want; or it can be a string
 * containing the name of the field.
 * @return mixed Returns the string contents of the field, FALSE on error, NULL for
 * NULL data, or TRUE for binary data.
 * @throws UodbcException
 * 
 */
function odbc_result(\Odbc\Result $statement,  $field)
{
    error_clear_last();
    $result = \odbc_result($statement, $field);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


/**
 * Rolls back all pending statements on the connection.
 * 
 * @param \Odbc\Connection $odbc The ODBC connection object,
 * see odbc_connect for details.
 * @throws UodbcException
 * 
 */
function odbc_rollback(\Odbc\Connection $odbc): void
{
    error_clear_last();
    $result = \odbc_rollback($odbc);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
}


/**
 * This function allows fiddling with the ODBC options for a
 * particular connection or query result.  It was written to help
 * find work around to problems in quirky ODBC drivers.  You should
 * probably only use this function if you are an ODBC programmer and
 * understand the effects the various options will have.  You will
 * certainly need a good ODBC reference to explain all the different
 * options and values that can be used.  Different driver versions
 * support different options.
 * 
 * Because the effects may vary depending on the ODBC driver, use of
 * this function in scripts to be made publicly available is
 * strongly discouraged.  Also, some ODBC options are not available
 * to this function because they must be set before the connection
 * is established or the query is prepared.  However, if on a
 * particular job it can make PHP work so your boss doesn't tell you
 * to use a commercial product, that's all that really
 * matters.
 * 
 * @param  $odbc Is a connection id or result id on which to change the settings.
 * For SQLSetConnectOption(), this is a connection id.
 * For SQLSetStmtOption(), this is a result id.
 * @param int $which Is the ODBC function to use. The value should be
 * 1 for SQLSetConnectOption() and
 * 2 for SQLSetStmtOption().
 * @param int $option The option to set.
 * @param int $value The value for the given option.
 * @throws UodbcException
 * 
 */
function odbc_setoption( $odbc, int $which, int $option, int $value): void
{
    error_clear_last();
    $result = \odbc_setoption($odbc, $which, $option, $value);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
}


/**
 * Lists all tables in the requested range.
 * 
 * To support enumeration of qualifiers, owners, and table types,
 * the following special semantics for the
 * catalog, schema,
 * table, and
 * table_type are available:
 * 
 * 
 * 
 * If catalog is a single percent
 * character (%) and schema and
 * table are empty strings, then the result
 * set contains a list of valid qualifiers for the data
 * source. (All columns except the TABLE_QUALIFIER column contain
 * NULLs.)
 * 
 * 
 * 
 * 
 * If schema is a single percent character
 * (%) and catalog and
 * table are empty strings, then the result
 * set contains a list of valid owners for the data source. (All
 * columns except the TABLE_OWNER column contain
 * NULLs.)
 * 
 * 
 * 
 * 
 * If table_type is a single percent
 * character (%) and catalog,
 * schema and table
 * are empty strings, then the result set contains a list of
 * valid table types for the data source. (All columns except the
 * TABLE_TYPE column contain NULLs.)
 * 
 * 
 * 
 * 
 * @param \Odbc\Connection $odbc The ODBC connection object,
 * see odbc_connect for details.
 * @param  $catalog The catalog ('qualifier' in ODBC 2 parlance).
 * @param  $schema The schema ('owner' in ODBC 2 parlance).
 * This parameter accepts the following search patterns:
 * % to match zero or more characters,
 * and _ to match a single character.
 * @param  $table The name.
 * This parameter accepts the following search patterns:
 * % to match zero or more characters,
 * and _ to match a single character.
 * @param  $types If table_type is not an empty string, it
 * must contain a list of comma-separated values for the types of
 * interest; each value may be enclosed in single quotes (') or
 * unquoted. For example, 'TABLE','VIEW' or TABLE, VIEW.  If the
 * data source does not support a specified table type,
 * odbc_tables does not return any results for
 * that type.
 * @return resource Returns an ODBC result object containing the information.
 * 
 * The result set has the following columns:
 * 
 * TABLE_CAT
 * TABLE_SCHEM
 * TABLE_NAME
 * TABLE_TYPE
 * REMARKS
 * 
 * Drivers can report additional columns.
 * @throws UodbcException
 * 
 */
function odbc_tables(\Odbc\Connection $odbc,  $catalog = null,  $schema = null,  $table = null,  $types = null)
{
    error_clear_last();
    $result = \odbc_tables($odbc, $catalog, $schema, $table, $types);
    if ($result === false) {
        throw UodbcException::createFromPhpError();
    }
    return $result;
}


