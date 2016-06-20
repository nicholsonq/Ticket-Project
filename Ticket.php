<? php
  $xml = new DOMDocument("1.0","UTF-8");
  $xml->load("Ticket.xml");

  $ticket = simplexml_load_file('Ticket.xml');
  $ticket->Customer->CustomerID = echo "<script>document.writeln(CustomerID);</script>";
  $ticket->Customer->FirstName = echo "<script>document.writeln(FirstName);</script>";
  $ticket->Customer->LastName = echo "<script>document.writeln(LastName);</script>";
  $ticket->Customer->Email = echo "<script>document.writeln(Email);</script>";
  $ticket->Customer->ContactDayNum = echo "<script>document.writeln(ContactDayNum);</script>";
  $ticket->Customer->ContactNightNum = echo "<script>document.writeln(ContactNightNum);</script>";
  $ticket->Issue->IssueStartDate = echo "<script>document.writeln(IssueStartDate);</script>";
  $ticket->Issue->DescriptionOfIssue = echo "<script>document.writeln(DescriptionOfIssue);</script>";
  $ticket->Issue->IPAddressOrDomain = echo "<script>document.writeln(IPAddressOrDomain);</script>";
  $ticket->Issue->CriticalityOfIssue = echo "<script>document.writeln(CriticalityOfIssue);</script>";


  $xml->save("Ticket.xml");
?>
