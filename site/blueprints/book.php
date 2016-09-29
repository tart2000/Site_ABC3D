<?php if(!defined('KIRBY')) exit ?>

title: Book
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  author: 
    label: Author
    type: text
  link:
    label: Link
    type: url
    width: 1/2
  free: 
    label: Free?
    type: toggle
    width: 1/2
  text:
    label: Text
    type:  textarea
