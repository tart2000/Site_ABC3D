<?php if(!defined('KIRBY')) exit ?>

title: Workshop
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  lengt: 
    label: Length
    type: text
    width: 1/2
  public:
    label: Public
    type: text
    width: 1/2
  software:
    label: Software
    type: checkboxes
    options: query
    query:
      page: softwares
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags