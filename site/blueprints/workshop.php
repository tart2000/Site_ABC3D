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
    width: 1/4
  groupsize:
    label: Group size
    type: number
    width: 1/4
  difficulty:
    label: Difficulty (1-5)
    type: number
    min: 1
    max: 5
    step: 1
    width: 1/4
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
  materiel: 
    label: Equipment (coma separated)
    type: text
  text:
    label: Text
    type: textarea
  deroule: 
    label: Schedule (déroulé)
    type: textarea
