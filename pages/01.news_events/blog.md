---
title: Home
sitemap:
    changefreq: daily
    lastmod: '24-07-2024 20:46'
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
root_of_blog: true
content:
    items:
        - self@.children
    limit: 12
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
modular_content:
    items:
        '@taxonomy.podcast':
            - 'Frank van der Hoeven'
    limit: 10
    order:
        by: date
        dir: desc
    pagination: '1'
header_bar:
    background: transparent
    text: auto
hero:
    image: home.webp
    overlay_direction: right
    overlay_gradient:
        - '0.8'
        - '0.1'
    title:
        text: DigiNEB
    content: "---\n## digiNEB supports the community of the New European Bauhaus (NEB) with a fine collection of digital solutions, projects and tools."
    height: 60vh
    subtitle: '<br /><br /><br /><br />'
    buttons:
        -
            text: 'AI tools'
            link: 'https://digineb.eu/digital-innovation/_outputs/ai-tools'
            classes: 'bg-primary text-white hover:text-black'
        -
            text: 'DigiNEB Podcasts'
            link: 'https://digineb.eu/podcasts/'
            classes: 'bg-primary text-white hover:text-black'
media_order: 'timber_on_top_d-1.jpg,paul-cocksedge-time-loop.png,home.webp,e-learning_animation.gif'
published: true
---

