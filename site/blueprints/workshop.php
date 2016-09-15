<?php if(!defined('KIRBY')) exit ?>

title: Workshop
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type: text
  aims:
    label: Pedagogic aims
    type: text
  postimage:
    label: Main Image
    type:  selector
    mode:  single
    types:
      - image
  lengt: 
    label: Length
    type: text
    width: 1/2
  groupsize:
    label: Group size
    type: number
    width: 1/2
  public:
    label: Public
    type: checkboxes
    options: query
    query:
      page: publics
  software:
    label: Software
    type: checkboxes
    options: query
    query:
      page: ressources/softwares
  text:
    label: Text
    type: textarea
  tags:
    label: Tags
    type: tags