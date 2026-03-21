# AI model & framework releases — 2026-03-20

**Scope:** Items publicly **dated 2026-03-20** (or announced that day in major outlets). Adjacent announcements (e.g. 2026-03-19) are noted only in the summary.

**Sources:** [MarkTechPost — Nemotron-Cascade 2 (2026-03-20)](https://www.marktechpost.com/2026/03/20/nvidia-releases-nemotron-cascade-2-an-open-30b-moe-with-3b-active-parameters-delivering-better-reasoning-and-strong-agentic-capabilities/), [NVIDIA technical blog — Nemotron 3 Super](https://developer.nvidia.com/blog/introducing-nemotron-3-super-an-open-hybrid-mamba-transformer-moe-for-agentic-reasoning/) (context; verify release date for your compliance needs).

---

## Releases table

| Company | Model / product | Description | Key features |
|--------|------------------|-------------|--------------|
| NVIDIA | **Nemotron-Cascade 2** | Open-weight **30B MoE** (~**3B active** params) aimed at strong reasoning and agentic use at smaller activated width. | Gold-medal-class claims on **IMO / IOI / ICPC**-style competitive tasks (per NVIDIA/MarkTechPost); strong math & coding benchmarks vs **Qwen3.5-35B-A3B** (e.g. AIME 2025, LiveCodeBench v6, ArenaHard v2, IFBench cited in coverage); post-training includes **Cascade RL**, **MOPD** (on-policy distillation), long-context and code/SWE RL stages; “thinking” / tool-style modes in chat template (see paper). |
| — | *(other same-day releases)* | Not exhaustively listed here. | Always cross-check vendor blogs, Hugging Face collections, and arXiv for the same calendar date. |

---

## Key takeaways

1. **Dense open weights:** Nemotron-Cascade 2 is positioned as a **high “intelligence density”** open model—large total parameter count with a **small active footprint**, targeting deployable cost/latency while pushing reasoning and coding.
2. **Training story:** Coverage emphasizes a **staged RL pipeline** (domain-specific cascade stages + **MOPD**) rather than only a single RL recipe—useful when comparing against other post-training stacks (GRPO-class vs distillation-augmented RL).
3. **Benchmark narrative:** Reported gains are **concentrated** in math, competitive programming, and instruction-following arenas; treat headline numbers as **vendor/coverage claims** until you reproduce on your own eval harness.
4. **Ecosystem context:** NVIDIA is also promoting the broader **Nemotron 3** line (e.g. hybrid Mamba–Transformer MoE variants for agentic workloads); confirm which artifacts dropped on which exact day if you need audit-grade timelines.
5. **Adjacent news:** Example: **Adobe Firefly** product updates were blogged **2026-03-19**—relevant to generative media, not necessarily a new base LLM drop on the 20th.

---

## Primary references

- Nemotron-Cascade 2 paper (linked from NVIDIA research): `https://research.nvidia.com/labs/nemotron/files/Nemotron-Cascade-2.pdf`
- Hugging Face collection (NVIDIA): `https://huggingface.co/collections/nvidia/nemotron-cascade-2`

*Compiled for MemoryGraph research storage; refresh if new primary sources appear later the same day.*
