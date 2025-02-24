---
title: Tags Reference
nav_order: 6
---

# Tags Reference
{:.no_toc}

<details open markdown="block">
  <summary>
      Table of contents
  </summary>
  {: .text-delta }
* TOC
{:toc}
</details>

---

## Member tags

### `{% raw %}{{ mb:member }} ... {{ /mb:member }}{% endraw %}`

Get the current member or a specific member.

Accepts the same parameters as the [`{% raw %}{{ user }}{% endraw %}` tag](https://statamic.dev/tags/user-profile), but is restricted to members.

### `{% raw %}{{ mb:members }} ... {{ /mb:members }}{% endraw %}`

Get a list of members.

Accepts the same parameters as the [`{% raw %}{{ users }}{% endraw %}` tag](https://statamic.dev/tags/users), but is restricted to members.

---

## User form tags

### `{% raw %}{{ mb:user:activate_form }} ... {{ /mb:user:activate_form }}{% endraw %}`

Render the activate form tag.

* **redirect (string):** URL to redirect on success
* **error_redirect (string):** URL to redirect on error

### `{% raw %}{{ mb:user:profile_form }} ... {{ /mb:user:profile_form }}{% endraw %}`

Render the profile form tag.

* **redirect (string):** URL to redirect on success
* **files (boolean):** Enable file uploads (`enctype="multipart/form-data"`)

### `{% raw %}{{ mb:user:change_password_form }} ... {{ /mb:user:change_password_form }}{% endraw %}`

Render the change password form tag.

* **redirect (string):** URL to redirect on success

---

## User page URL tags

### `{% raw %}{{ mb:user:register_url }}{% endraw %}`

Returns the register page URL.

### `{% raw %}{{ mb:user:login_url }}{% endraw %}`

Returns the login page URL.

* **append_redirect (bool\|string):** Whether to append a redirect to the URL

### `{% raw %}{{ mb:user:profile_url }}{% endraw %}`

Returns the profile page URL.

### `{% raw %}{{ mb:user:forgot_password_url }}{% endraw %}`

Returns the forgot password page URL.

### `{% raw %}{{ mb:user:reset_password_url }}{% endraw %}`

Returns the reset password page URL.

### `{% raw %}{{ mb:user:change_password_url }}{% endraw %}`

Returns the change password page URL.

### `{% raw %}{{ mb:user:index_url }}{% endraw %}`

Returns the user listing page URL.

### `{% raw %}{{ mb:user:show_url }}{% endraw %}`

Returns the user detail page URL.

* **anything:** All parameters will be parsed to the route