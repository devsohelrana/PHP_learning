> [!NOTE]
> Useful information that users should know, even when skimming content.

> [!TIP]
> Helpful advice for doing things better or more easily.

> [!IMPORTANT]
> Key information users need to know to achieve their goal.

> [!WARNING]
> Urgent info that needs immediate user attention to avoid problems.

> [!CAUTION]
> Advises about risks or negative outcomes of certain actions.

### Step 1 — Create a new GitHub Repository

> [!TIP]
> Go to [New repository](https://github.com/new) && create new repository.

### Step 2 — Initialize Git in the project folder

###### Initialize the Git Repository

```
git init
```

> [!Important]
> This step creates a hidden `.git` directory in your project folder, which the `git` software recognizes and uses to store all the metadata and version history for the project.

###### Add the files to Git index

```
git add -A
```

> [!Important]
> The `git add` command is used to tell git which files to include in a commit, and the `-A` (or `--all`) argument means “include all”.

###### Commit Added Files

```
git commit -m 'Added new project on my GitHub profile inculuded project learning process'
```

> [!Important]
> The `git commit` command creates a new commit with all files that have been “added”. The `-m` (or `--message`) sets the *message* that will be included alongside the commit, used for future reference to understand the commit. In this case, the message is: `'Added my project'`.

###### Add a new remote origin

```
git remote add origin git@github.com: github-profile-username/repository-name.git
```

> [!Important]
> In git, a `remote` refers to a remote version of the same repository, which is typically on a server somewhere *(in this case, GitHub)*. `origin` is the default name git gives to a remote server *(you can have multiple remotes)* so `git remote add origin` is instructing git to add the URL of the default remote server for this repo.

###### Push to GitHub

```
git push -u -f origin main
```

> [!Important]
> The `-u` (or `--set-upstream`) flag sets the remote `origin` as the *upstream* reference. This allows you to later perform `git push` and `git pull` commands without having to specify an `origin` since we always want GitHub in this case.
>
> The `-f` (or `--force`) flag stands for *force*. This will automatically overwrite everything in the remote directory. We’re using it here to overwrite the default README that GitHub automatically initialized.

---

> All together

```
git init
git add -A
git commit -m 'Added my project'
git remote add origin git@github.com: github-profile-username/repository-name.git
git push -u -f origin main
```
