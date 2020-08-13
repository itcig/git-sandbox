# Git and CI/CD Sandbox

This repo is for practicing git best practices as well as CI/CD changes made during the of summer 2020.

## Repo Setup

-   Clone the [git-sandbox repo](https://github.com/itcig/git-sandbox) to your local machine `git clone https://github.com/itcig/git-sandbox.git`
-   Once the repo has been cloned open the git-sandbox directory and run `yarn` to install the npm packages
-   Next run `composer install` to install the php dependencies

## Git Worksheet

## Git Best Practices

### Branches

-   Create new branches off of master prefacing them with your initials followed by a hyphen
-   Then add the name of the feature or bug ie. `hr-my-feature` or `hr-publication-nav-bug`

### Commits

-   Make the smallest changes possible for each commit
-   A commit should revolve around a single fix or task
-   Only commit when a block of work is complete

#####Commit Messages

-   Separate subject from body with a blank line
-   Limit the subject line to around 50 characters
    -   If you're having a difficult time fitting everything into 50 characters the commit may be too large
-   Use the imperative mood in the subject line
    -   Spoken/written as if giving a command/instruction
    -   ie. Clean your room, Close the door, Take out the trash
    -   If applied, this commit will _[git subject line here]_

**Format**

```bash
[type][(optional scope)]: [description]

[optional body]

[optional footer]
```

**Type**

-   `feat` | A new feature
    -   Correlates with **MINOR** in semantic versioning
-   `fix` | A bug fix
    -   Correlates with **PATCH** in semantic versioning
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
-   Correlates with **MAJOR** in semantic versioning
-   May be part of commits of any type
-   Optionally a `!` may be added following the type to draw attention to a breaking change ie. chore!: something breaking
-   BREAKING CHANGE: is still required in the body or footer
-   Indicated at the very beginning of the body section, or at the beginning of a line in the footer section
-   All capital letters required

### PRs
