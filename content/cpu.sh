#!/usr/bin/perl
use strict;
use warnings;
open(INFIL,"< /proc/stat") or die("Unable To Open /proc/stat: $!\n");

  my @loads;
   my $cpuload = 0;
   for (0,1)
   {
      my $in = <INFIL>;
      (warn "something wrong!\n"), next unless $in =~ /^cpu\b/;
      push @loads,  ($in =~ /\d+/g)[0..2];
      seek INFIL, 0, 0;
      select (undef, undef, undef, 1) unless $_;
   }
   redo unless defined $loads[0];
   for (0..2) { ($cpuload += ($loads[$_+3] - $loads[$_])/4); }
   print "$cpuload %\n";

close(INFIL);
