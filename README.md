# Git and CI/CD Sandbox

This repo is for practicing git best practices as well as CI/CD changes made during the of summer 2020.

## Repo Setup :computer

-   Clone the [git-sandbox repo](https://github.com/itcig/git-sandbox) to your local machine `git clone https://github.com/itcig/git-sandbox.git`
-   Once the repo has been cloned open the git-sandbox directory and run `yarn` to install the npm packages
-   Next run `composer install` to install the php dependencies
-   Create a [Personal access token](https://github.com/settings/tokens) for release-it
-   Then add the following to your ~/.bash_profile `export GITHUB_TOKEN="[github personal access token]"`

## <a name="git-worksheet"></a> Git Worksheet :writing_hand:

Review the [Git Best Practices](#git-best-practices) below.

### Step One - The new process

1. Decided what feature you would like to add to the sandbox (this can be as complex or simple as you'd like)
1. Create a feature branch using the format outlined in the [Branches section](#branches)
1. Make some changes
1. Use `git add [file name]` to stage the changes
    - Commit the change(s) grouping them into commits using the standards outline in the [Commits section](#commits)
1. When ready to commit type `git commit` and press return
1. Write the commit message (title and body) utilizing the [Commit Messages Section](#commit-messages)
1. Repeat the prior three steps until all changes for your branch have been committed
1. Push the changes to the remote repo `git push origin [your branch name]`
1. Create a Pull Request on [Github](https://github.com/itcig/git-sandbox/compare) from `[your branch name]` into the `main` branch
1. Use the format outline in the [Pull Requests section](#pull-requests) to create a name and body for the PR's message
1. Scroll down and click `Squash and merge` (if this is not an option the Merge button will have a dropdown that can be clicked to select Squash and Merge)
1. Using the format listed in the [Merge section](#merge) create the commit message for the merge (this will be the only commit that will be seen on the `main` branch)
1. After the merge is completed see the [commit log for the main branch](https://github.com/itcig/git-sandbox/commits/main), you should only see the merge commit listed
1. Create a new release for your merged changes (this will be automated later on) see the [Releases section](#releases)
1. [View the release on Github](https://github.com/itcig/git-sandbox/releases)

### Step Two - Correcting Problems

1.

## <a name="git-best-practices"></a> Git Best Practices :thumbsup:

### <a name="branches"></a> Branches

-   Create new branches off of master prefacing them with your initials followed by a hyphen
-   Then add the name of the feature or bug ie. `hr-my-feature` or `hr-publication-nav-bug`

### <a name="commits"></a> Commits

-   Make the smallest changes possible for each commit
-   A commit should revolve around a single fix or task
-   Only commit when a block of work is complete

##### <a name="commit-messages"></a> Commit Messages

-   Separate subject from body with a blank line
-   Limit the subject line to around 50 characters
    -   If you're having a difficult time fitting everything into 50 characters the commit may be too large
-   Use the imperative mood in the subject line
    -   Spoken/written as if giving a command/instruction
    -   ie. Clean your room, Close the door, Take out the trash
    -   If applied, this commit will _[commit subject line here]_

**Format**

```bash
[type][(optional scope)]: [description]

[optional body]

[optional footer]
```

<a name="commit-type"></a> **Type**

-   `feat` | A new feature
    -   Correlates with [**MINOR**](#minor) in semantic versioning
-   `fix` | A bug fix
    -   Correlates with [**PATCH**](#patch) in semantic versioning
-   `docs` | Documentation only changes
-   `style` | Changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc)
-   `refactor` | A code change that neither fixes a bug nor adds a feature
-   `perf` | A code change that improves performance
-   `test` | Adding missing tests or correcting existing tests
-   `build` | Changes that affect the build system or external dependencies (example scopes: gulp, broccoli, npm)
-   `ci` | Changes to our CI configuration files and scripts (example scopes: Travis, Circle, BrowserStack, SauceLabs)
-   `chore` | Other changes that don't modify src or test files
-   `revert` | Reverts a previous commit

**Scope**

-   Additional contextual information contained within parenthesis
-   A noun describing a section of the codebase

**Description**

-   Short summary of the code changes

**Body**

-   Additional contextual information about the code changes
-   Separated by an empty line from the description
-   Wrap the body at 72 characters
-   Not all commits require a body, especially when the change is simple
-   MUST be provided after `BREAKING CHANGE:`
-   Use the body to explain what and why vs. how
    -   The code explains how
    -   Explain the problem that the commit solves
    -   Are there side effects the commit causes?

**Footer**

-   May be one or more lines
-   Contains meta-information about the commit
    -   Related pull-requests, reviewers, breaking changes, with one piece of meta-information per-line

**Breaking Change:**

-   `BREAKING CHANGE:` | at the beginning of its optional body or footer section introduces a breaking API change
-   Correlates with [**MAJOR**](#major) in semantic versioning
-   May be part of commits of any type
-   Optionally a `!` may be added following the type to draw attention to a breaking change ie. chore!: something breaking
-   BREAKING CHANGE: is still required in the body or footer
-   Indicated at the very beginning of the body section, or at the beginning of a line in the footer section
-   All capital letters required

### <a name="pull-requests"></a> Pull Requests

-   The message should summarize the group of commits with a brief description of the bug or feature
-   The body should contain bullet points to summarize the commits within
    -   This doesn't need to be 1 to 1 if you add some logic, update the docs, and update styles those could all be contained in a single bullet
    -   May also exclude minor dependency updates as well

### <a name="merging></a> Merging

-   Always choose to `Squash and merge` on github
-   Use the same commit title structure as a standard commit see above [Commit Messages section](#commit-messages)
    -   Append the following to the title `[#<pull request number>](https://github.com/itcig/<repo>/pull/<PR number>)`
    -   The end result should look like this ([#1](https://github.com/itcig/git-sandbox/pull/1))
-   The body will be auto generated and should contain bullets for every commit within using the commit's title as the text following the bullet, the commit's body if it has one will be listed beneath the bullet

## <a name="releases"></a> Releases

-   A release should be created after a PR has been merged
-   Determine whether the changes in the PR are considered a patch, minor, or major change see the below [Semantic Versioning section](#semantic-versioning) or use look at the [Git Commit Types](#commit-type) listed above
-   Run the corresponding command to create the release
    -   For [PATCH](#patch) run `yarn release:patch`
    -   For [MINOR](#minor) run `yarn release:minor`
    -   For [MAJOR](#major) run `yarn release:major`

## <a name="semantic-versioning"></a> [Semantic Versioning](https://semver.org/)

v0.0.0 translates to major.minor.patch

<a name="major"></a> **MAJOR** - when the changes are incompatible with the API

-   All Breaking Changes will be classified as a major change

<a name="minor"></a> **MINOR** - when the changes add functionality in a backwards compatible manner

-   This will include new features

<a name="patch"></a> **PATCH** - when the changes fix a bug in a backwards compatible manner

-   This will include bug fixes
