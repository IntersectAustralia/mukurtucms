# User manual: [Ngan'gi Language Preservation](https://ngangi.net)
## Community Administrators

Contents:
* [Adding items](help_guide/ga.md#adding-items)
* [Creating cultural protocols](#creating-cultural-protocols)
* [Select existing Cultural Protocols](#select-existing-cultural-protocols)
* [Adding People](#adding-people)
* [Invite a new user](#invite-a-new-user)


## Adding items
Adding items such as cultural protocols, digital heritage items, etc is exactly the same for Community Administrators as for General Administrators. For information on how to do this, see: [Adding items](help_guide/ga.md#adding-items)
Specific items include:
* [Creating a Community](help_guide/ga.md#create-a-community)
* [Adding a Digital Heritage Item](help_guide/ga.md#add-a-digital-heritage-item)
* [Creating a Collection](help_guide/ga.md#create-a-collection)
* [Adding a Dictionary Word](help_guide/ga.md#add-a-dictionary-word)


## Creating Cultural Protocols
1. To add Protocols (User must have Community Administrator permission) navigate to `+ Cultural Protocol` on home page.
2. Fill in necessary details like `Name`, `Accessibility of the protocol`, `parent community` (if it belongs to one).
3. Select parent community and click on `Save`.

## Select existing Cultural Protocols
1. To see Protocols that have already been created, go to https://ngangi-staging.intersect.org.au/dashboard/communities.
2. Alternatively, select `Content` (Drupal top left corner if an admin user). A list should appear of all the content
items created, including `Protocols`. Protocols are categorised under `Type` as `Cultural Protocols`
3. Select a protocol to explore configurations and settings.

## Adding People
1. Click on `People` on homepage
2. Click on `+Add User`
3. Fill necessary information with Role of the User.
4. You can also notify user via email (Click on Tick box provided).
5. Click `Save`.

## Invite a new user
1. Logged in, from homepage, use `+ User` link in main navigation should take you to https://ngangi-staging.intersect.org.au/admin/people/create. Here you can add a not-previously-logged User, assign them roles, and add them directly to one or more Communities. They'll receive an email which has a link to access the site where they can create their own password.
1.2.	Alternatively, from the Dashboard, go to `Site Users` > `Add User`
1.3.	Once a user is in the system, you can additionally add them to a Community/Protocol via  `Community/Protocol` > `Edit` > `Invite`


## FAQs
### No email address
*I want to add a user who doesn’t have an email address.*

If you need to add someone who doesn’t have an email, you can create a temporary email mailbox by using <anyname>@mailinator.com. When the system sends out the welcome email to set up their password/account, go to https://www.mailinator.com/  and enter in the address you’ve used. That email will stay available at mailinator for a few hours. If the user needs to recover a password, the same method of go to https://www.mailinator.com/  and enter in the address they’ve used will also allow the user to recover an account.

### Controlling protocols
*As a Community Administrator, It’s not obvious to me how I control what a community sees. Can I specify that an item is visible to all communities by specifying all, or by not specifying any?*

1. Specific to Ngan'gi site: https://ngangi-staging.intersect.org.au./dashboard/communities shows specifically how your own Communities > Protocols  are currently working, with Edit links to each Protocol
2. http://support.mukurtu.org/customer/en/portal/articles/2430079-how-do-user-roles-and-permissions-work- gives a good overview on how Permissions/Communities/Protocols work, and the linked MukurtuUserRoles_PermissionMatrix.pdf shows a further overview of how the Permissions work on the site.

### Photo not appearing and managing permissions
*I’ve figured out the Scald Library, and have successfully added an image to it and then accessed that image to add it to a Digital Heritage item. That item was a photo, but it doesn’t automatically appear under the ‘Photographs’ tab.*

If you want photos to show to all site visitors e.g. via the "Photographs" link, you need permission to edit the "Photographs" page directly and add/delete photos as usual (by adding through Scald). Note though, the “Photographs” page is currently visible to every visitor to the site, even unlogged users.
1.	Permissions may be added to individual photographs if/as they're added as Digital Heritage Items to only display to certain Community/Protocol members. To subsequently view these content items you need to be  a member of the nominated Community/Protocol to enable access to them.
2.	There's probably several ways to do this, but one way to review what you've already added to Scald is to is to go to `Dashboard` >  `Content and Collections` > [`View Media`](https://ngangi-staging.intersect.org.au/admin/content/atoms)
3.	This differ​s from the 'Audio-Video' link which updates with anything that's been added as a `+ Digital Heritage` item.
