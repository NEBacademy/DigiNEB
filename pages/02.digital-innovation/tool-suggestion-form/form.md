---
title: 'Tool suggestion form'
form:
    name: contact
    fields:
        name:
            label: Name
            placeholder: 'Enter your name'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        email:
            label: Email
            placeholder: 'Enter your email address'
            type: email
            validate:
                required: true
        'tool name':
            label: 'Tool name'
            placeholder: 'What is the name of the tool you want to include in the directory?'
            type: text
            validate:
                required: true
        synopsis:
            label: Synopis
            placeholder: 'A short description of the functionality of the tool'
            type: textarea
            validate:
                required: true
        weblink:
            label: 'Website URL'
            placeholder: 'A link to the site where the tool is hosted'
            type: text
            validate:
                required: true
        tags:
            label: Tags
            placeholder: 'Tags that help users to find your tool in the directory'
            type: text
            validate:
                required: true
        g-recaptcha-response:
            label: Captcha
            type: captcha
            recaptcha_not_validated: 'Captcha not valid!'
    buttons:
        submit:
            type: submit
            value: Submit
        reset:
            type: reset
            value: Reset
    process:
        captcha: true
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: '{% include ''forms/data.txt.twig'' %}'
        email:
            subject: '[Site Contact Form] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        message: 'Thank you for getting in touch!'
media_order: 'nebbifyer.webp,nebbifier 2.webp,nebbyfier 22.webp'
hero:
    image: 'nebbyfier 22.webp'
    height: 60vh
sitemap:
    lastmod: '23-08-2024 16:46'
---

