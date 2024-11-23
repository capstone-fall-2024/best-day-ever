### CAPSTONE PROJECT - DMIT2590
# BEST DAY EVER VACATIONS BY JEN

This is the GitHub repository for the capstone project of EWEB Communication Team for Fall 2024 semester at NAIT

The website is created with custom WordPress theme - classic theme. The fonts and colors fixed in theme.json.

Working Process 

Step 1: Create new branch 
```
git branch branch-name
```
Step 2: Save your working on local branch
```
git stash save "message"
```
Step 3: Switch to main branch
```
git checkout main
```
Step 4: Pull the latest changes from the remote repository
```
git pull origin main
```
Step 5: Switch back to your working branch
```
git checkout branch-name
```
Step 6: Merge main branch to your working branch
```
git merge main
```
Step 7: List your stashed to confirm which one is you want to apply.
The stashed with {0} is the newest one on your list.
```
git stash list

<!-- You will see something like this -->
stash@{0}: On quote: work on quote branch
```
Step 6: Apply the stash to your current branch
```
git stash apply stash&{0}

<!-- Using the stash number on the list that you want to apply -->
```
Step 7: Add your work to git
```
git add .

<!-- using "." to add everything -->
```

Step 8: Commit your work with the message
```
git commit -m "your message"

<!-- try to using some word such as feature / fix / docs / style / refactor / build / test in front of your commit for more details of your work-->
```
Step 9: Push your branch to remote branch
```
<!-- First time push new branch -->
git push --set-upstream origin branch-name

<!-- Not the first time -->
git push
```
**<b> REMEMBER always check your git status to make sure it up-to-date</b> **
```
git status
```

!!! VOILA
