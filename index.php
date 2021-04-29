<body bgcolor="cyan">
<pre>
<?php

print "<h1>Welcome to {{ ansible_hostname }}</h1><br>";
print "<h3>Last updated on {{ ansible_distribution }} os</h3><br>";
print "<h2>Hi I am Dipaditya Das. I am an Indian Engineer and Developer.<h2><br>";
print `/usr/sbin/ifconfig`;

?>
</pre>
</body>
