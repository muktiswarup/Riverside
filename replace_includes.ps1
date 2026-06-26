$files = Get-ChildItem -Filter *.php | Where-Object { $_.Name -ne 'header.php' -and $_.Name -ne 'footer.php' }
foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    
    $content = $content -replace '(?s)<!DOCTYPE html>.*?<!--Search Popup-->.*?</form>\s*</div>\s*</div>\s*</div>', "<?php include 'header.php'; ?>"
    $content = $content -replace '(?s)<!--footer section  -->\s*<footer class="main-footer">.*', "<?php include 'footer.php'; ?>"
    
    # Just in case some files don't have <!--footer section  -->
    $content = $content -replace '(?s)<footer class="main-footer">.*', "<?php include 'footer.php'; ?>"
    
    Set-Content $file.FullName -Value $content -NoNewline
}
