<?php

namespace Safe;

use Safe\Exceptions\FtpException;

/**
 * Sends an ALLO command to the remote FTP server to 
 * allocate space for a file to be uploaded.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param int $size The number of bytes to allocate.
 * @param string|null $response A textual representation of the servers response will be returned by 
 * reference in response if a variable is provided.
 * @throws FtpException
 * 
 */
function ftp_alloc(\FTP\Connection $ftp, int $size, ?string &$response = null): void
{
    error_clear_last();
    $result = \ftp_alloc($ftp, $size, $response);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * 
 * 
 * @param resource $ftp An FTP\Connection instance.
 * @param string $remote_filename 
 * @param string $local_filename 
 * @param int $mode 
 * @throws FtpException
 * 
 */
function ftp_append( $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY): void
{
    error_clear_last();
    $result = \ftp_append($ftp, $remote_filename, $local_filename, $mode);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Changes to the parent directory.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @throws FtpException
 * 
 */
function ftp_cdup(\FTP\Connection $ftp): void
{
    error_clear_last();
    $result = \ftp_cdup($ftp);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Changes the current directory to the specified one.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $directory The target directory.
 * @throws FtpException
 * 
 */
function ftp_chdir(\FTP\Connection $ftp, string $directory): void
{
    error_clear_last();
    $result = \ftp_chdir($ftp, $directory);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Sets the permissions on the specified remote file to 
 * permissions.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param int $permissions The new permissions, given as an octal value.
 * @param string $filename The remote file.
 * @return int Returns the new file permissions on success.
 * @throws FtpException
 * 
 */
function ftp_chmod(\FTP\Connection $ftp, int $permissions, string $filename): int
{
    error_clear_last();
    $result = \ftp_chmod($ftp, $permissions, $filename);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * ftp_close closes the given link identifier
 * and releases the resource.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @throws FtpException
 * 
 */
function ftp_close(\FTP\Connection $ftp): void
{
    error_clear_last();
    $result = \ftp_close($ftp);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_connect opens an FTP connection to the
 * specified hostname.
 * 
 * @param string $hostname The FTP server address. This parameter shouldn't have any trailing 
 * slashes and shouldn't be prefixed with ftp://.
 * @param int $port This parameter specifies an alternate port to connect to. If it is
 * omitted or set to zero, then the default FTP port, 21, will be used.
 * @param int $timeout This parameter specifies the timeout in seconds for all subsequent network operations.
 * If omitted, the default value is 90 seconds. The timeout can be changed and
 * queried at any time with ftp_set_option and
 * ftp_get_option.
 * @return resource Returns an FTP\Connection instance on success.
 * @throws FtpException
 * 
 */
function ftp_connect(string $hostname, int $port = 21, int $timeout = 90)
{
    error_clear_last();
    $result = \ftp_connect($hostname, $port, $timeout);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * ftp_delete deletes the file specified by
 * filename from the FTP server.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $filename The file to delete.
 * @throws FtpException
 * 
 */
function ftp_delete(\FTP\Connection $ftp, string $filename): void
{
    error_clear_last();
    $result = \ftp_delete($ftp, $filename);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_fget retrieves remote_filename
 * from the FTP server, and writes it to the given file pointer.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param resource $stream An open file pointer in which we store the data.
 * @param string $remote_filename The remote file path.
 * @param int $mode The transfer mode. Must be either FTP_ASCII or
 * FTP_BINARY.
 * @param int $offset The position in the remote file to start downloading from.
 * @throws FtpException
 * 
 */
function ftp_fget(\FTP\Connection $ftp,  $stream, string $remote_filename, int $mode = FTP_BINARY, int $offset = 0): void
{
    error_clear_last();
    $result = \ftp_fget($ftp, $stream, $remote_filename, $mode, $offset);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_fput uploads the data from a file pointer
 * to a remote file on the FTP server.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $remote_filename The remote file path.
 * @param resource $stream An open file pointer on the local file. Reading stops at end of file.
 * @param int $mode The transfer mode. Must be either FTP_ASCII or
 * FTP_BINARY.
 * @param int $offset The position in the remote file to start uploading to.
 * @throws FtpException
 * 
 */
function ftp_fput(\FTP\Connection $ftp, string $remote_filename,  $stream, int $mode = FTP_BINARY, int $offset = 0): void
{
    error_clear_last();
    $result = \ftp_fput($ftp, $remote_filename, $stream, $mode, $offset);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_get retrieves a remote file from the FTP server,
 * and saves it into a local file.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $local_filename The local file path (will be overwritten if the file already exists).
 * @param string $remote_filename The remote file path.
 * @param int $mode The transfer mode. Must be either FTP_ASCII or
 * FTP_BINARY.
 * @param int $offset The position in the remote file to start downloading from.
 * @throws FtpException
 * 
 */
function ftp_get(\FTP\Connection $ftp, string $local_filename, string $remote_filename, int $mode = FTP_BINARY, int $offset = 0): void
{
    error_clear_last();
    $result = \ftp_get($ftp, $local_filename, $remote_filename, $mode, $offset);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Logs in to the given FTP connection.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $username The username (USER).
 * @param string $password The password (PASS).
 * @throws FtpException
 * 
 */
function ftp_login(\FTP\Connection $ftp, string $username, string $password): void
{
    error_clear_last();
    $result = \ftp_login($ftp, $username, $password);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Creates the specified directory on the FTP server.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $directory The name of the directory that will be created.
 * @return string Returns the newly created directory name on success.
 * @throws FtpException
 * 
 */
function ftp_mkdir(\FTP\Connection $ftp, string $directory): string
{
    error_clear_last();
    $result = \ftp_mkdir($ftp, $directory);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * 
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $directory The directory to be listed.
 * @return array Returns an array of arrays with file infos from the specified directory on success.
 * @throws FtpException
 * 
 */
function ftp_mlsd(\FTP\Connection $ftp, string $directory): array
{
    error_clear_last();
    $result = \ftp_mlsd($ftp, $directory);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * ftp_nb_get retrieves a remote file from the FTP server,
 * and saves it into a local file.
 * 
 * The difference between this function and ftp_get is that
 * this function retrieves the file asynchronously, so your program can perform 
 * other operations while the file is being downloaded.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $local_filename The local file path (will be overwritten if the file already exists).
 * @param string $remote_filename The remote file path.
 * @param int $mode The transfer mode. Must be either FTP_ASCII or
 * FTP_BINARY.
 * @param int $offset The position in the remote file to start downloading from.
 * @return int Returns FTP_FAILED or FTP_FINISHED
 * or FTP_MOREDATA to open the local file.
 * @throws FtpException
 * 
 */
function ftp_nb_get(\FTP\Connection $ftp, string $local_filename, string $remote_filename, int $mode = FTP_BINARY, int $offset = 0): int
{
    error_clear_last();
    $result = \ftp_nb_get($ftp, $local_filename, $remote_filename, $mode, $offset);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * ftp_nb_put stores a local file on the FTP server.
 * 
 * The difference between this function and the ftp_put
 * is that this function uploads the file asynchronously, so your program can
 * perform other operations while the file is being uploaded.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $remote_filename The remote file path.
 * @param string $local_filename The local file path.
 * @param int $mode The transfer mode. Must be either FTP_ASCII or
 * FTP_BINARY.
 * @param int $offset The position in the remote file to start uploading to.
 * @return int Returns FTP_FAILED or FTP_FINISHED
 * or FTP_MOREDATA to open the local file.
 * @throws FtpException
 * 
 */
function ftp_nb_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY, int $offset = 0): int
{
    error_clear_last();
    $result = \ftp_nb_put($ftp, $remote_filename, $local_filename, $mode, $offset);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * 
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $directory The directory to be listed. This parameter can also include arguments, eg.
 * ftp_nlist($ftp, "-la /your/dir");.
 * Note that this parameter isn't escaped so there may be some issues with
 * filenames containing spaces and other characters.
 * @return array Returns an array of filenames from the specified directory on success.
 * @throws FtpException
 * 
 */
function ftp_nlist(\FTP\Connection $ftp, string $directory): array
{
    error_clear_last();
    $result = \ftp_nlist($ftp, $directory);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * ftp_pasv turns on or off passive mode. In
 * passive mode, data connections are initiated by the client,
 * rather than by the server.
 * It may be needed if the client is behind firewall.
 * 
 * Please note that ftp_pasv can only be called after a
 * successful login or otherwise it will fail.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param bool $enable If TRUE, the passive mode is turned on, else it's turned off.
 * @throws FtpException
 * 
 */
function ftp_pasv(\FTP\Connection $ftp, bool $enable): void
{
    error_clear_last();
    $result = \ftp_pasv($ftp, $enable);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_put stores a local file on the FTP server.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $remote_filename The remote file path.
 * @param string $local_filename The local file path.
 * @param int $mode The transfer mode. Must be either FTP_ASCII or
 * FTP_BINARY.
 * @param int $offset The position in the remote file to start uploading to.
 * @throws FtpException
 * 
 */
function ftp_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY, int $offset = 0): void
{
    error_clear_last();
    $result = \ftp_put($ftp, $remote_filename, $local_filename, $mode, $offset);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * 
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @return string Returns the current directory name.
 * @throws FtpException
 * 
 */
function ftp_pwd(\FTP\Connection $ftp): string
{
    error_clear_last();
    $result = \ftp_pwd($ftp);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * Sends an arbitrary command to the FTP server.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $command The command to execute.
 * @return array Returns the server's response as an array of strings.
 * No parsing is performed on the response string, nor does
 * ftp_raw determine if the command succeeded.
 * @throws FtpException
 * 
 */
function ftp_raw(\FTP\Connection $ftp, string $command): array
{
    error_clear_last();
    $result = \ftp_raw($ftp, $command);
    if ($result === null) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * ftp_rename renames a file or a directory on the FTP
 * server.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $from The old file/directory name.
 * @param string $to The new name.
 * @throws FtpException
 * 
 */
function ftp_rename(\FTP\Connection $ftp, string $from, string $to): void
{
    error_clear_last();
    $result = \ftp_rename($ftp, $from, $to);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * Removes the specified directory on the FTP server.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $directory The directory to delete. This must be either an absolute or relative
 * path to an empty directory.
 * @throws FtpException
 * 
 */
function ftp_rmdir(\FTP\Connection $ftp, string $directory): void
{
    error_clear_last();
    $result = \ftp_rmdir($ftp, $directory);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_site sends the given SITE 
 * command to the FTP server.
 * 
 * SITE commands are not standardized, and vary from server
 * to server. They are useful for handling such things as file permissions and 
 * group membership.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @param string $command The SITE command. Note that this parameter isn't escaped so there may
 * be some issues with filenames containing spaces and other characters.
 * @throws FtpException
 * 
 */
function ftp_site(\FTP\Connection $ftp, string $command): void
{
    error_clear_last();
    $result = \ftp_site($ftp, $command);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
}


/**
 * ftp_ssl_connect opens an explicit SSL-FTP connection to the
 * specified hostname. That implies that
 * ftp_ssl_connect will succeed even if the server is not
 * configured for SSL-FTP. Only when ftp_login is called, the client will send the
 * appropriate AUTH FTP command, so ftp_login will fail.
 * The connection established by ftp_ssl_connect will not do
 * peer-certificate verification.
 * 
 * @param string $hostname The FTP server address. This parameter shouldn't have any trailing 
 * slashes and shouldn't be prefixed with ftp://.
 * @param int $port This parameter specifies an alternate port to connect to. If it is
 * omitted or set to zero, then the default FTP port, 21, will be used.
 * @param int $timeout This parameter specifies the timeout for all subsequent network operations.
 * If omitted, the default value is 90 seconds. The timeout can be changed and
 * queried at any time with ftp_set_option and
 * ftp_get_option.
 * @return resource Returns an FTP\Connection instance on success.
 * @throws FtpException
 * 
 */
function ftp_ssl_connect(string $hostname, int $port = 21, int $timeout = 90)
{
    error_clear_last();
    $result = \ftp_ssl_connect($hostname, $port, $timeout);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns the system type identifier of the remote FTP server.
 * 
 * @param \FTP\Connection $ftp An FTP\Connection instance.
 * @return string Returns the remote system type.
 * @throws FtpException
 * 
 */
function ftp_systype(\FTP\Connection $ftp): string
{
    error_clear_last();
    $result = \ftp_systype($ftp);
    if ($result === false) {
        throw FtpException::createFromPhpError();
    }
    return $result;
}


