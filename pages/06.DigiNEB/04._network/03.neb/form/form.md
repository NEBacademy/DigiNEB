---
title: Form
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
        message:
            label: Message
            placeholder: 'Enter your message'
            type: textarea
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

<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1459935565%3Fsecret_token%3Ds-XYu9Ylo6Unf&color=%235d94b4&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/aesop-planning" title="AESOP" target="_blank" style="color: #cccccc; text-decoration: none;">AESOP</a> · <a href="https://soundcloud.com/aesop-planning/memories-series-patsy-healey/s-XYu9Ylo6Unf" title="Memories Series - Patsy Healey" target="_blank" style="color: #cccccc; text-decoration: none;">Memories Series - Patsy Healey</a></div>