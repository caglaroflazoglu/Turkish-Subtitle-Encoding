#!/usr/bin/perl -w
use Encode qw(decode encode);
my $file="dosya.srt";
my $out="son.srt";
 
open(DAT,$file) or die("$file acma hatasi\n");
my @lines=<DAT>;
close(DAT);
my $lines1=join("",@lines);
 my $data = encode("utf8", decode("windows-1254", $lines1));
 
open(DAT,">>",$out) or die("$out acma hatasi\n");
print DAT $data;
close(DAT);
