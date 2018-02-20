Get-ChildItem -Path C:\Users\j.magdaluyo\Downloads\optimizilla -Filter "*-min*" -Recurse | 
Rename-Item -NewName {$_.name -replace '-min',''}