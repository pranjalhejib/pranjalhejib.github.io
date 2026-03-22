# 🛡️ IP Reputation Checker - SOC Tool

A free, browser-based bulk IP reputation lookup tool built for SOC analysts. No backend. No cost. Just open and use.

- - - 

## What is this?

A lightweight web tool that lets you paste a list of IP addresses and instantly check their reputation against **94+ security vendors** via the VirusTotal API.

- - - 

## Why was it built?

Most teams don't have access to premium threat intel platforms. During incident response or alert triage, analysts often end up manually checking IPs one-by-one on the VirusTotal website - which is slow and doesn't scale.

This tool solves that by:
-  Allowing **bulk lookups** in one go
-  Showing results in a clean, scannable table
-  Exportable in .CSV
-  Working entirely in the browser - no server, no subscription, no setup
-  Being shareable across the whole team via a single URL (GitHub Pages)

- - - 

## How to use it

### Step 1 - Get a free VirusTotal API key
Sign up at [virustotal.com/gui/join- community](https://www.virustotal.com/gui/join- community). It's free. The free tier allows 4 requests/minute - the tool handles rate limiting automatically.

### Step 2 - Open the tool
Access the Link. This is hosted on GitHub Pages.

### Step 3 - Run a lookup
1. Paste your IPs in the text box - one per line
2. Enter your VirusTotal API key
3. Optionally check **Remember key** to save it in your browser
4. Click **Run Lookup**

### Step 4 - Read the results
Each IP gets a row showing:

| Column | What it means |
|- - - |- - - |
| Verdict | malicious / suspicious / clean / unknown |
| Detections | How many vendors flagged it out of total scanned |
| VT Verdict Text | Exact text VT shows e.g. "94/94 security vendors flagged this IP as malicious" |
| Country | Geo- location of the IP |
| Owner / ASN | Who owns the IP block |
| Engines flagged | Which specific AV/threat engines raised the flag |
| VT Report | Direct link to full VirusTotal report |

### Step 5 - Export
Click **Export CSV** to download results for your incident report or ticket.

- - - 

## Deploying to GitHub Pages (team access)

1. Create a free account at [github.com](https://github.com)
2. Create a new **public** repository
3. Upload `index.html` (rename from `ip- reputation- checker.html` if needed)
4. Go to **Settings → Pages → Deploy from branch (main)**
5. Wait ~60 seconds
6. Share `https://YOUR- USERNAME.github.io/REPO- NAME/` with your team

- - - 

## How it works (technically)

Browsers enforce a security policy called **CORS** that blocks web pages from making API calls to external domains directly. To get around this without a backend server, the tool routes requests through [corsproxy.io](https://corsproxy.io) - a free open- source proxy service.

```
Browser → corsproxy.io → VirusTotal API → corsproxy.io → Browser
```

Your API key is sent as a request header and goes directly to VirusTotal. Nothing is stored or logged by this tool.

Once the response comes back, the tool reads `last_analysis_stats` from the JSON payload - a field that contains the aggregated verdict counts from all scanning engines - and uses that to compute the verdict and render the table.

- - - 

## Future scope

-  **URL / Domain bulk reputation checker** - extend the same tool to accept domains and URLs using the `/urls` and `/domains` endpoints of the VirusTotal API
-  **File hash lookup** - submit MD5/SHA256 hashes in bulk to check for known malware
-  **Shodan integration** - pull open ports and services alongside the reputation score
-  **AbuseIPDB support** - add a second reputation source alongside VirusTotal for more confidence
-  **Verdict history** - show when the IP was last analysed and whether the verdict has changed
-  **Auto- extract IPs from text** - paste a raw log or email and let the tool pull out all IPs automatically
-  **Dark/light theme toggle** - currently dark only
-  **Saved sessions** - reload previous lookup results without re- querying the API

- - - 

## Limitations

-  Free VirusTotal API: 4 requests/minute, 500 requests/day
-  No historical data (shows last known analysis only)
-  corsproxy.io is a third- party service - for sensitive environments, consider self- hosting a proxy or using a backend

- - - 

## Built with

-  Vanilla HTML, CSS, JavaScript - zero dependencies
-  [VirusTotal API v3](https://developers.virustotal.com/reference/overview)
-  [corsproxy.io](https://corsproxy.io) for CORS bypass
-  Hosted free on GitHub Pages
