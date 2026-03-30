import shutil
import os

base = r'C:\Users\Charl\MMIP\LMS\LMS-TekQuora-NewDesign'
lms_ui = os.path.join(base, 'resources', 'views', 'lms-ui')
old_views = os.path.join(base, 'Infixlms-old', 'resources', 'views')
new_views = os.path.join(base, 'resources', 'views')

# 1. Remove lms-ui folder
if os.path.exists(lms_ui):
    shutil.rmtree(lms_ui)
    print(f'Deleted: {lms_ui}')
else:
    print(f'Already gone: {lms_ui}')

# 2. Copy old views to new location
for item in os.listdir(old_views):
    src = os.path.join(old_views, item)
    dst = os.path.join(new_views, item)
    if os.path.isdir(src):
        if os.path.exists(dst):
            shutil.rmtree(dst)
        shutil.copytree(src, dst)
    else:
        shutil.copy2(src, dst)
    print(f'Copied: {item}')

# 3. List result
print('\nFinal views folder contents:')
for item in sorted(os.listdir(new_views)):
    print(f'  {item}')
