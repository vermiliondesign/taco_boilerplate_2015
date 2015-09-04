# Overview

## Functional Specs

### Post Types Include:
- Page
- Film
- Artwork
- Exhibition Image

### Templates Include:
- Homepage
- Default Page
- Film Landing Page
- Film Single Page
- Archives Landing Page
- Exhibition Page
- Media Room Page

### Client Assets and Theme

#### About Videos:
All videos are hosted on vimeo

#### About Images:
Only upload the large image (between 1200 - 1800 px wide) for all artworks/exhibition images. WordPress will auto-crop the thumbnail and gallery images. Only upload .jpg's (Save for Web 80% for compression, in Photoshop/Illustrator). Do NOT upload .tif, or images that are not Web Compatible, and are greater than 2MB.

#### About Plugins:
TacoWordpress - manages Custom Post Types and Custom Field registration.
AddBySearch - manages attaching artworks and exhibition images to a film.
WYSIWYG Inserts - customizes wysiwyg options, including color, formats, and more.

## Theme Includes

### Custom Post Type: Film
#### Custom Fields:
* ```film_video``` - wysiwyg textarea, insert vimeo code in Text tab
* ```film_artworks``` - addbysearch, attach artworks for the film, drag to reorder
* ```film_exhibition_images``` - addbysearch, attach exhibition images for the film, drag to reorder
* ```film_featured_image``` - image, used for thumbail on film and archive landing Pages
* ```is_archived``` - checkbox, if unchecked, film will be filtered to Film Landing Page. If checked, film will be filtered to Archive Landing Page.

### Custom Post Type: Artwork
#### Custom Fields:
* ```full_image``` - image, upload full resolution of image (1200 - 1800 px wide, height auto). Save for Web. Save as .jpg (80%)
* ```with_film``` - select, assign the Artwork to the Film it belongs to, so it will be included in the addbysearch results on the Film.
* ```is_media_room``` - checkbox, if checked, artwork will be filtered to Media Room Page.

### Custom Post Type: Exhibition Images
#### Custom Fields:
* ```full_image``` - image, upload full resolution of image (1200 - 1800 px wide, height auto). Save for Web. Save as .jpg (80%)
* ```with_film``` - select, assign the Artwork to the Film it belongs to, so it will be included in the addbysearch results on the Film.
