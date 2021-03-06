<p>Vacation is a Horde module for managing user e-mail "vacation notices" or
"auto-responders."  It works via a local <em>vacation</em> program which must
be installed and functioning on the server. It supports vacation programs
using the .forward-style forwarding mechanism supported by several popular
mailers.</p>

<p>Right now, Vacation provides fairly complete support for managing .forward
style vacation notices on Sendmail or Courier mail based systems via an FTP
transport. It also has some support for LDAP, Qmail, and SQL servers.</p>

<p>Vacation is part of a suite of account management modules for Horde
consisting of <?php echo $this->linkTo('Forwards', array('controller' => 'app',
'action' => 'app', 'app' => 'forwards')) ?>, <?php echo $this->linkTo('Passwd',
array('controller' => 'app', 'action' => 'app', 'app' => 'passwd')) ?>, and
Vacation.</p>

<p>Collectively these modules now comprise what is known as <em>Sork</em>.
There is a mailing list available for these modules.  See <a
href="http://lists.horde.org/mailman/listinfo/sork/">http://lists.horde.org/mailman/listinfo/sork/</a>
for information or to subscribe.</p>
