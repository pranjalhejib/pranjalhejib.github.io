# IP Reputation Checker — SOC Tool

Bulk VirusTotal IP reputation lookup. Free, no backend, team-ready.

## Deploy to GitHub Pages (one-time setup)

1. **Create a GitHub account** at https://github.com if you don't have one

2. **Create a new repository**
   - Go to https://github.com/new
   - Name it anything e.g. `ip-reputation-checker`
   - Set it to **Public**
   - Click **Create repository**

3. **Upload the file**
   - Click **Add file → Upload files**
   - Upload `ip-reputation-checker.html`
   - **Rename it to `index.html`** (important — GitHub Pages serves `index.html` as the homepage)
   - Click **Commit changes**

4. **Enable GitHub Pages**
   - Go to your repo → **Settings** → **Pages** (left sidebar)
   - Under **Source**, select **Deploy from a branch**
   - Branch: `main`, folder: `/ (root)`
   - Click **Save**

5. **Wait ~60 seconds**, then your tool is live at:
   `https://YOUR-USERNAME.github.io/ip-reputation-checker/`

6. **Share that URL** with your whole team — done!

## Usage

- Each analyst needs a **free VirusTotal API key**
  - Sign up at: https://www.virustotal.com/gui/join-community
  - Free tier: 4 requests/min (rate limiting is handled automatically)
- Paste IPs (one per line), enter API key, click **Run Lookup**
- Export results to CSV for incident reports

## Notes

- API keys are never sent to any server except VirusTotal
- The tool uses `corsproxy.io` to forward requests (required due to browser CORS restrictions)
- Supports IPv4 and IPv6
- Deduplicates IPs automatically
