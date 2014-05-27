# News

Simple blog-like template for displaying news and text posts.

The end product will be static web pages showing chronological news posts.

Data will be sourced from markdown text files and rss feeds and compiled into these news pages.

The problem is going to be how to scale it up. Don't want to regenerate the full site every time so need some method of 'only updating new stuff'.

## Flow

There exists a compiled data file that stores the data in some kind of easily manipulated form (e.g. json).

The app 

1. Picks up all the source files
2. Converts source files to consistent format.
3. Compares source files to data file and inserts data.
4. Re-generated html.
5. Combines with template to output webpages.

## Data File

### Parsing MD



