# International Hindu Genealogy Module

A webtrees module that adds support for international Hindu genealogy features.

## Features

### Hindu Facts Module
- Adds support for Hindu genealogical facts
- Currently supports:
  - GOTRA (Hindu family lineage/clan)

## Usage

### Recording Gotra
1. Add a new fact to an individual
2. Select "Fact" as the fact type
3. In the Type field, select "Hindu family lineage or clan"
4. Enter the Gotra name in the details

## GEDCOM Structure
```gedcom
1 FACT
2 TYPE GOTRA
2 DATA Kashyapa
```
## To Do
 _ Remove Tag(s)
 Add more desc

## Installation
1. Download the module
2. Extract to your `modules_v4` directory
3. Enable the module in webtrees control panel

## License
Copyright (C) 2024 webtrees development team
Released under GNU General Public License, version 3 