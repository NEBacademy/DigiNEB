---
title: Projects
media_order: projects.webp
hero:
    image: HEU.jpg
    height: 60vh
    overlay_gradient:
        - '0.5'
        - '0.1'
    content: '## A collection of databases with projects that develop digital tools or innovations that can support the objectives of the New European Bauhaus: beautiful, sustainable and together.'
    buttons:
        -
            text: 'Overview of Digital Projects'
            link: digital-innovation/_outputs/project-listing
            classes: 'bg-primary text-white hover:text-black'
root_of_blog: true
content:
    items:
        - '@self.children'
    limit: 10
    order:
        by: folder
        dir: desc
feed:
    limit: 10
sitemap:
    lastmod: '19-07-2024 13:56'
show_sidebar: false
---

