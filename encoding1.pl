#!/usr/bin/perl -w
my $file="dosya.srt";
my $out="son.srt";

#linux 
system("iconv -f windows-1254 -t utf-8 $file > $out")
