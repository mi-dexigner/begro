require 'compass/import-once/activate'
# Require any additional compass plugins here.
require 'susy'
# Set this to the root of your project when deployed:
project_type = :stand_alone
cache_path = 'C:\temp\sass'
http_path = "/" #root level target path
css_dir = "." #targets our default style.css file at the root level of our theme
sass_dir = "sass" #targets our sass directory
images_dir = "img" #targets our pre existing image directory
fonts_dir = 'fonts/' #targets our Fonts directory
javascripts_dir = "js" #targets our JavaScript directory
sourcemap = true
line_comments = false
# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
output_style = :expanded
environment = :development
color_output = true
relative_assets = true # To enable relative paths to assets via compass helper functions.
# note: this is important in wordpress themes for sprites
