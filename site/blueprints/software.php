<?php if(!defined('KIRBY')) exit ?>

title: Software
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  link:
    label: Link
    type: url
  free: 
    label: Free?
    type: toggle
    width: 1/2
  open: 
    label: Open source?
    type: toggle
    width: 1/2
  install: 
    label: Soft installed? (vs in-browser)
    type: toggle
    width: 1/2 
  abc3d: 
    label: Développé pendant ABC3D ?
    type: toggle 
    width: 1/2
  text:
    label: Text
    type:  textarea
